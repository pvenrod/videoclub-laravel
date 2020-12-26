<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Pelicula;

class PeliculaController extends Controller
{
    public function index() {
        $data["peliculas"] = Pelicula::all();
        return view('pelicula.all',$data);
    }

    public function show($id) {
        $data["pelicula"] = Pelicula::find($id);
        return view('pelicula.profile',$data);
    }
}
