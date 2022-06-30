<?php

use Illuminate\Support\Facades\Route;
use App\Models\Image;
use App\Models\Video;
use App\Models\Audio;
use App\Models\Parameter;
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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('admin/station', 'App\Http\Controllers\StationController');
	Route::get('admin/videos', function () {
		$videos = Video::orderBy('id', 'DESC')->paginate(5);
		return view('pages.table_list', compact('videos'));
	})->name('admin.videos');
	Route::get('admin/images', function () {
		$images = Image::orderBy('id', 'DESC')->paginate(5);
		return view('pages.icons', compact('images'));
	})->name('admin.images');
	Route::get('admin/audio', function () {
		$audios = Audio::orderBy('id', 'DESC')->paginate(5);
		return view('pages.upgrade',compact('audios'));
	})->name('admin.audio');

	Route::get('admin/parameters', function () {
		$parameters = Parameter::orderBy('id', 'DESC')->paginate(5);
		return view('pages.map',compact('parameters'));
	})->name('admin.parameters');

	Route::get('admin/notifications', function () {
		return view('pages.notifications');
	})->name('admin.notifications');

});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('admin/user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});


