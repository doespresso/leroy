<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//echo public_path() . '/uploads/afisha/big/';

Route::get('home', array('as' => 'home','uses'=>'HomeController@index'));
Route::get('/', function(){
    return Response::view('home.old');
});


Route::resource('afishas', 'AfishasController');
Route::resource('cats', 'CatsController');
Route::resource('items', 'ItemsController');
Route::resource('photos', 'PhotosController');


Route::get('photos/gal/{gal}', 'PhotosController@gal');



Route::get('logout', array('as' => 'logout', function () { }))->before('auth');
Route::get('logout', array('as' => 'logout', function () {
    Auth::logout();
    return Redirect::route('home')
        ->with('flash_notice', 'You are successfully logged out.');
}))->before('auth');

Route::get('profile', array('as' => 'profile', function () {
    return View::make('profile');
}))->before('auth');

Route::filter('guest', function()
{
    if (Auth::check())
        return Redirect::route('home')
            ->with('flash_notice', 'You are already logged in!');
});


Route::get('login', array('as' => 'login', function () {
    return View::make('login');
}))->before('guest');

Route::post('login', function () {
    $user = array(
        'email' => Input::get('email'),
        'password' => Input::get('password')
    );

    if (Auth::attempt($user)) {
        return Redirect::route('home')
            ->with('flash_notice', 'You are successfully logged in.');
    }

    // authentication failure! lets go back to the login page
    return Redirect::route('login')
        ->with('flash_error', 'Your username/password combination was incorrect.')
        ->withInput();
});


Route::filter('auth', function()
{
    if (Auth::guest())
        return Redirect::route('login')
            ->with('flash_error', 'You must be logged in to view this page!');
});



