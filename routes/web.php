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
		// Student Dashboard
		Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

		// My Learnings
		Route::prefix('my-learnings')->group(function () {
			Route::get('/all-courses', 'App\Http\Controllers\StudentController@all_courses')->name('student.my_learnings.all_courses');
			Route::get('/collections', 'App\Http\Controllers\StudentController@collections')->name('student.my_learnings.collections');
			Route::get('/wishlist', 'App\Http\Controllers\StudentController@wishlist')->name('student.my_learnings.wishlist');
			Route::get('/archive', 'App\Http\Controllers\StudentController@archive')->name('student.my_learnings.archived');
		});

		// Help and Support Center
		Route::prefix('support-ticket')->group(function () {
			// Create a Support Ticket
			Route::get('/create', 'App\Http\Controllers\SupportController@create')->name('support.create');
			Route::post('/store', 'App\Http\Controllers\SupportController@store')->name('support.store');
		});

		// Notification
		Route::get('/notifications', 'App\Http\Controllers\StudentController@notifications')->name('student.notifications');
		
		// Messages
		Route::get('/messages', 'App\Http\Controllers\StudentController@messages')->name('student.messages');

		// Student Profile
		Route::prefix('profile')->group(function () {
			Route::get('/', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
			Route::put('/', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
			Route::put('/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
		});	
	});
});


// Public Routes
Route::get('/become-an-instructor', 'App\Http\Controllers\PageController@become_an_instructor')->name('frontend.become_an_instructor');