<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Request\ValidadorAutor;
use DB;
use Carbon\Carbon;
class ControladorAutores extends Controller
{
    
    public function index()
    {
        $ConsultaAutor= DB::table('tb__autores')->get();
        return view('Autores',compact('ConsultaAutor'));
    }

    
    public function create()
    {
        return view('Registro_autores');
    }

    
    public function store(Request $request)
    {
        DB::table('tb__autores')->insert([
            "nombre"=> $request->input('txtNombre_autor'),
            "fecha_nac"=> $request->input('txtFecha_Nacimiento'),
            "numero_libros"=> $request->input('Libros'),
            
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        $Nom = $request->input('txtNombre_autor');
        return redirect('autor')->with('Confirmacion','abc')->with('txtNombre_autor', $Nom);
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
