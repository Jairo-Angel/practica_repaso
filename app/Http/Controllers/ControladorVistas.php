<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidadorLibro;

use App\Http\Requests\ValidadorAutor;

class ControladorVistas extends Controller
{

    public function showPrincipal(){
        return view('Principal');
    }
    public function showRegistro(){
        return view('Registro');
    }

    public function showRegistro_autores(){
        return view('Registro_autores');
    }

    public function procesarLibro(ValidadorLibro $req){
        
        $tit = $req->input('txtTitulo');
        return redirect('Registro')->with('Confirmacion','Datos recibidos correctamente')->with('titulo', $tit);
    }

    public function procesarAutor(ValidadorAutor $req){
        
        $Nom = $req->input('txtNombre_autor');
        return redirect('Registro_autores')->with('confirmacion','Datos recibidos correctamente')->with('txtNombre_autor', $Nom);
        
    }
    
}
