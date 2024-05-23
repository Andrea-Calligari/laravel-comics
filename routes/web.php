<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

/*
Route::get('/home', function () {
    return view('partials.home');
})->name('home');
*/

Route::get('/comics', function (){


    $comics = config('comics');
    // dd($comics);
    return view('pages.comics', compact('comics'));

})->name('comics');


Route::get('/about-us', function (){

     return view('pages.about-us');

 })->name('about-us');
