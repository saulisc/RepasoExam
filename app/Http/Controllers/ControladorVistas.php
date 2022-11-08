<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRequest;

class ControladorVistas extends Controller
{
    public function procesarFormulario(validadorRequest $req){
        $titulo = $req -> input('txtTitulo');
        return redirect() -> route('formulario') -> with('success', compact('titulo'));
    }


    public function showRegistro(){
        return view('formulario');
    }
    
    public function showHome(){
        return view('home');
    }
}
