<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth, Session;
use Validator, Input, Redirect;
use Image;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getIndex()
    {
        $user = User::where('id', '=', Auth::user()->id)->first();

        return view('profile.index')
                    ->withUser($user);
    }


    public function updateProfile(Request $request, $id) {
        
        $updateUser = User::find($id);

        //validation
        if($request->name == $updateUser->name) {
            $this->validate($request, array(
                'phone'     => 'required|max:255',
                'image'        => 'sometimes|image|max:400',
            ));
        } else {
            $this->validate($request, array(
                'name'      => 'required|max:255',
                'phone'     => 'required|max:255',
                'image'     => 'sometimes|image|max:400',
            ));
        }
        
        $updateUser->name = $request->name;
        $updateUser->phone = $request->phone;

        // image upload
        if($request->hasFile('image')) {
            $image      = $request->file('image');
            $filename   = $updateUser->email. '.' . $image->getClientOriginalExtension();
            $location   = public_path('images/profilepicture/'. $filename);

            Image::make($image)->resize(300, 300)->save($location);
            /*Image::make($image)->resize(300, 300, function ($constraint) {
            $constraint->aspectRatio();
            })->save($location);*/

            $updateUser->image = $filename;

        }

        $updateUser->save(); 

        Session::flash('success', 'Information updated successfully!');
                                  
        //redirect
        return back();

    }

    public function changePassword(Request $request, $id) {
        //validation
        $this->validate($request, array(
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
       ));


        // update to DB
        $user = User::find($id);

        $user->password = bcrypt($request->password);

        $user->save();

        Session::flash('success', 'Password is successfully changed!');
         
        //redirect
        return back();
    }



    public function destroy($id)
    {
        //
    }
}
