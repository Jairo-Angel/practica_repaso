<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\ValidadorLibro;
use DB;
use Carbon\Carbon;

class Controladorbd extends Controller
{
   
    public function index()
    {
        $ConsultaLibros= DB::table('tb__libros')->get();
        return view('Libros',compact('ConsultaLibros'));
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        DB::table('tb__libros')->insert([
            "isbn"=> $request->input('txtTitulo'),
            "titulo"=> $request->input('txtRecuerdo'),
            "autor"=> $request->input('txtTitulo'),
            "numeropag"=> $request->input('txtRecuerdo'),
            "editorial"=> $request->input('txtTitulo'),
            "correo"=> $request->input('txtRecuerdo'),
            "id_tb__autores"=> $request->input('txtRecuerdo'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);

        return redirect('recuerdo/create ')->with('Confirmacion','abc');
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
