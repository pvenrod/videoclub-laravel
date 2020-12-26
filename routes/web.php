<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pelicula;

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

Route::get('/',function() {
    $data['peliculas'] = Pelicula::all();
    return view('pelicula.all',$data);
});
Route::get('/peliculas','PeliculaController@index')->name("pelicula.index");
Route::get('/pelicula/{id}','PeliculaController@show')->name("pelicula.show");
Route::get('/pelicula/edit/{id}','PeliculaController@edit')->name("pelicula.edit");
Route::get('/pelicula/delete/{id}','PeliculaController@delete')->name("pelicula.delete");
