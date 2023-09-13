<?php
use Illuminate\Support\Facades\Route;

//Route::view()
//Route::get()
//Route::post()
//Route::delete()
//Route::patch()


//Route::view('/', 'landing.index')->name('index');
//Route::view('/about', 'landing.about')->name('about');

Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contacto', 'contacto')->name('contacto');