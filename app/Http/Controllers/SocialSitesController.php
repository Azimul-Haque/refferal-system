<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\SocialSite;
use App\Type;
use Auth, Session;
use Validator, Input, Redirect;

class SocialSitesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socialsites = SocialSite::where('user_id', '=', Auth::user()->id)->get();

        return view('socialsites.index')
                    ->withSocialsites($socialsites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();

        return view('socialsites.create')
                    ->withTypes($types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, array(
            'type_id'       => 'required|max:255',
            'country'        => 'required|max:255',
            'title' => 'required|max:255',
            'url'        => 'required|max:255|unique:social_sites',
            'clicklimit'        => 'required|integer',
            'cpc'        => 'required|integer|max:10|min:1',
       ));


        //store to DB
        $socialsite = new SocialSite;

        $user = Auth::user();
        $socialsite->user()->associate($user);
        $socialsite->type_id = $request->type_id;
        $socialsite->country = $request->country;
        $socialsite->title = $request->title;
        $socialsite->url = $request->url;
        $socialsite->clicklimit = $request->clicklimit;
        $socialsite->cpc = $request->cpc;

        $socialsite->save();

        Session::flash('success', 'Site is saved successfully!');

        //redirect
        return redirect()->route('socialsite.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $socialsite = SocialSite::where('id', '=', $id)
                                ->where('user_id', '=', Auth::user()->id)
                                ->first();
        if($socialsite){
            // do nothing...
        } else{
            Session::flash('warning', 'Unauthorized data!');
            //redirect
            return redirect()->route('socialsite.index');
        }

        $types = Type::all();

        $typenames = [];
        foreach ($types as $type) {
            $typenames[$type->id] = $type->name;  
        }

        return view('socialsites.edit')
                    ->withSocialsite($socialsite)
                    ->withTypes($typenames);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $socialsite = SocialSite::find($id);

        //validation
        if($request->url == $socialsite->url) {
            $this->validate($request, array(
                'type_id'       => 'required|max:255',
                'country'       => 'required|max:255',
                'title'         => 'required|max:255',
                'clicklimit'    => 'required|integer',
                'cpc'           => 'required|integer|max:10|min:1',
            ));
        } else {
            $this->validate($request, array(
                'type_id'       => 'required|max:255',
                'country'       => 'required|max:255',
                'title'         => 'required|max:255',
                'url'           => 'required|max:255|unique:social_sites',
                'clicklimit'    => 'required|integer',
                'cpc'           => 'required|integer|max:10|min:1',
            ));
        }
        


        $user = Auth::user();
        $socialsite->type_id = $request->type_id;
        $socialsite->country = $request->country;
        $socialsite->title = $request->title;
        $socialsite->url = $request->url;
        $socialsite->clicklimit = $request->clicklimit;
        $socialsite->cpc = $request->cpc;

        $socialsite->save();

        Session::flash('success', 'Site is updated successfully!');

        //redirect
        return redirect()->route('socialsite.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getPoint($type_id) {
        
        $socialsite = SocialSite::where('type_id', '=', $type_id)
                                ->inRandomOrder()
                                ->first();

        if($socialsite) {
            // do nothing...
        } else {
            Session::flash('warning', 'No result found!');
            //redirect
            return back();
        }

        return view('socialsites.getpoint')
                    ->withSocialsite($socialsite);

    }
}
