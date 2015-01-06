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

Route::get('/', "HomeController@showWelcome");

Route::get('/x', "PagesController@show");

Route::get('/db', function() {

  //$users = DB::table('users')->find(1);
  //$users = User::find(1);

  // $user = new User;
  // $user->username = 'karen';
  // $user->password = Hash::make('password');
  // $user->save();
  //
  // $user = User::find(3);
  // $user->delete();

  return User::all();

});

Route::get('users', function() {

  $users = User::all();

  return View::make('users.index', ['users' => $users]);

});

Route::get('users/{username}', function($username) {

  $user = User::whereUsername($username)->first();

  return View::make('users.show', ['user' => $user]);

});



/*
Route::get('/', function()
{
	return View::make('hello');
});
 */
