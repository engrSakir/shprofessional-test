<?php

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

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $user = new User();
    // $user->name = 'User Name';
    // $user->email = 'user@gmail.com';
    // $user->password = bcrypt('password');
    // $user->save();
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/files', 'HomeController@files')->name('files');
Route::get('/location', 'HomeController@location')->name('location');
Route::get('/locationy', 'HomeController@locationy')->name('locationy');
Route::get('/locationz', 'HomeController@locationz')->name('locationz');
Route::get('/locationo', 'HomeController@locationo')->name('locationo');
Route::get('/notes', 'HomeController@Notes')->name('notes');

Route::get('/api-key', 'ApiKeyController@index')->name('apiKey');

Route::get('/d-file/{file}', 'HomeController@Down')->name('d.file');

Route::get('/notes/create', 'NotesController@create')->name('notes.create');
Route::post('/notes/post-create', 'NotesController@store')->name('notes.store');

Route::get('/notes/edit/{id}', 'NotesController@edit')->name('notes.edit');
Route::post('/notes/post-edit/{id}', 'NotesController@update')->name('notes.update');

Route::get('/download-forms', 'HomeController@downloadForms')->name('downloadForms');
Route::get('/message', 'HomeController@getSendMessage')->name('sendMessage');
Route::post('/message', 'HomeController@sendMessage');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::post('/profile-update', 'HomeController@update')->name('pro.update');
Route::post('/document-upload', 'HomeController@uploadDoc')->name('doc.upload');

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', 'AdminLoginController@login')->name('admin.login');
    Route::post('login', 'AdminLoginController@adminLogin')->name('admin.login.post');
    Route::get('home', 'AdminController@home')->name('admin.home');
    Route::get('user/{id}', 'AdminController@user')->name('admin.user');
    //created by shaykat
    Route::resource('super-admin', 'AdminUserController');
    Route::get('files/{id}/{loc}', 'AdminController@files')->name('admin.files');
    Route::get('upload-file/{id}/{loc}', 'AdminController@getUpload')->name('admin.get.upload');
    Route::post('/send-message/{user_id}', 'AdminController@sendMessage')->name('admin.sendMessage');
    Route::post('/document-upload', 'AdminController@uploadDoc')->name('admin.doc.upload');
    Route::get('/document-delete/{id}', 'AdminController@delete')->name('admin.doc.del');

    Route::get('document-file/{file}', 'AdminController@Doenf')->name('admin.d.f');
    Route::get('/document', 'AdminController@showDoc')->name('admin.doc.show');
});

Route::get('/services', 'UserController@services')->name('services');
Route::get('/partners', 'UserController@partners')->name('partners');
Route::get('/contactus', 'UserController@contactus')->name('contact');
Route::post('/mail', 'UserController@mail')->name('mail');
Route::get('/whyshprofessional', 'UserController@shprofessional')->name('shprofessional');
