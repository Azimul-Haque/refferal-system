<?php


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

// twitter
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

// facebook, google
Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');



Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');

Route::get('/home', 'HomeController@index');


// social site controller
// social site controller
Route::resource('/socialsite', 'SocialSitesController');

Route::get('/socialsite/getpoint/{type_id}', ['uses' => 'SocialSitesController@getPoint', 'as' => 'socialsite.getpoint']);
// social site controller
// social site controller

// User Controller
Route::get('/profile', 'UserController@getIndex')->name('profile.index');
Route::put('/profile/{id}', ['uses' => 'UserController@updateProfile', 'as' => 'profile.updateprofile']);
Route::put('/profile/password/change/{id}', ['uses' => 'UserController@changePassword', 'as' => 'profile.changepassword']);
// User Controller

// Admin Controller
Route::get('/admin', 'AdminController@getIndex')->name('admin.index');
// Admin Controller


