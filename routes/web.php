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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Nosotros', 'Nosotros@index')->name('Nosotros');
Route::get('/Galería', 'Galeria@index')->name('Galeria');
Route::get('/Ayuda_s', 'Ayuda_s@index')->name('Ayuda_s');
Route::get('/Contacto', 'Contacto@index')->name('Contacto');