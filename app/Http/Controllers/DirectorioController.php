<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DirectorioController extends Controller
{
    //
    public function mostrarDirectorio()
    {
        return view('directorio');
    }

    public function crearEntrada()
    {
        return view('crearEntrada');
    }

    public function buscarEntrada()
    {
        return view('buscarEntrada');
    }

}
