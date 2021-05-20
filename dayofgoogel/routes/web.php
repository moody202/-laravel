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
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/logen', function () {
    return view('logen');
});

Route::get('/header', function () {
    return view('header');
});

// Route::view('header', 'header' , [
//     '$page_name' => 'header',
//     '$page_descrption' => 'fjhdsnsdhnsvndnsh djfdns djfdb'
// ]);

 Route::view('content', 'content');
