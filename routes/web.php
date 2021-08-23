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


// Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function ()
// {

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('mobile', function () {
    return view('services/mobile');
})->name('mobile');


Route::get('branding', function () {
    return view('services/branding');
})->name('branding');


Route::get('web', function () {
    return view('services/web');
})->name('web');

Route::get('seo', function () {
    return view('services/seo');
})->name('seo');


Route::get('social-media-management', function () {
    return view('services/smm');
})->name('smm');


Route::get('digital-marketing', function () {
    return view('services/dm');
})->name('dm');


Route::get('influencer', function () {
    return view('services/influencer');
})->name('influencer');


Route::get('video-production', function () {
    return view('services/vp');
})->name('vp');


Route::get('photo-shooting', function () {
    return view('services/ps');
})->name('ps');


Route::get('drone', function () {
    return view('services/drone');
})->name('drone');


Route::get('event-management', function () {
    return view('services/em');
})->name('em');


Route::get('sponsorship', function () {
    return view('services/sponsorship');
})->name('sponsorship');


Route::get('about-us', function () {
    return view('about');
})->name('about');


Route::get('our-projects', function () {
    return view('ourprojects.projects');
})->name('projects');


Route::get('our-projects-web', function () {
    return view('ourprojects.web');
})->name('pweb');


//contact from contact page
Route::get('contact-us', function () {
    return view('contact');
})->name('contact');
Route::post('send/email', 'App\Http\Controllers\SmFromContactPageController@sendData')->name('send.email');
//our team
Route::get('join-our-team', function () {
    return view('jointeam.ourteam');
})->name('ourteam');
Route::post('send-email/send', 'App\Http\Controllers\SendEmailController@send')->name('send');


// });
