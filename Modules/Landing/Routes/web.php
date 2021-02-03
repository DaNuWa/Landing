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

Route::prefix('landing')->group(function() {
    Route::get('/', 'LandingController@index');
});

Route::get('/', function ()
{
    return view('landing::index');
});

Route::get('/contacts', [\Modules\Landing\Http\Controllers\ContatctController::class,'store'])->name('contacts.store');
