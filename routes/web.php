<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes(['verify' => true]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['middleware' => 'auth'], function () {

	Route::prefix('student/dashboard')->group(function () {
		Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

		// My Learnings
		Route::prefix('my-learnings')->group(function () {
			Route::get('/all-courses', 'App\Http\Controllers\StudentController@all_courses')->name('student.my_learnings.all_courses');
			Route::get('/collections', 'App\Http\Controllers\StudentController@collections')->name('student.my_learnings.collections');
			Route::get('/wishlist', 'App\Http\Controllers\StudentController@wishlist')->name('student.my_learnings.wishlist');
		});

		Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
		Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
		Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
		Route::get('/support-ticket', 'App\Http\Controllers\SupportController@create')->name('support.create');
	});
});
