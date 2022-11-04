<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidadorLibro;

class ControladorVistas extends Controller
{

    public function showPrincipal(){
        return view('Principal');
    }
    public function showRegistro(){
        return view('Registro');
    }

    public function procesarLibro(ValidadorLibro $req){
        
        return redirect('Registro')->with('Confirmacion','Datos recibidos correctamente');
    }
    
}
