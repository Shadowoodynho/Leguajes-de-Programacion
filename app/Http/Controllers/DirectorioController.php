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
    public function verContactos($codigoEntrada)
    {
        $entrada = Entrada::where('codigoEntrada', $codigoEntrada)->first();
        $contactos = Contacto::where('codigoEntrada', $codigoEntrada)->get();

        return view('vercontactos', compact('entrada', 'contactos'));
    }
}
