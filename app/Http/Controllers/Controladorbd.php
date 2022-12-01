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
        $ConsultaAutores = DB::table('tb__autores')->get();
        return view('Libros',compact('ConsultaLibros','ConsultaAutores'));
    }

   
    public function create()
    {
        $ConsultaAutores = DB::table('tb__autores')->get();
        
        return view('Registro',compact('ConsultaAutores'));
    }

    
    public function store(Request $request)
    {
        DB::table('tb__libros')->insert([
            "isbn"=> $request->input('txtIsbn'),
            "titulo"=> $request->input('txtTitulo'),
            "id_Autor"=> $request->input('txtAutor'),
            "numeropag"=> $request->input('txtPaginas'),
            "editorial"=> $request->input('txtEditorial'),
            "correo"=> $request->input('txtEmail'),
            
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        $tit = $request->input('txtTitulo');

        return redirect('libro/create ')->with('Confirmacion','abc')->with('txtTitulo', $tit);
    }

    
    public function show($id)
    {
        $consultaId= DB::table('tb__libros')->where('idLibro',$id)->first();
        return view('Eliminar_libros', compact('consultaId'));
    }

    
    public function edit($id)
    {
        $consultaId= DB::table('tb__libros')->where('idLibro',$id)->first();
        return view('Editar_libros', compact('consultaId'));
    }

   
    
    public function update(Request $request, $id)
    {
        DB::table('tb__libros')->where('idLibro', $id)->update([

            "isbn"=> $request->input('txtIsbn'),
            "titulo"=> $request->input('txtTitulo'),
            "id_Autor"=> $request->input('txtAutor'),
            "numeropag"=> $request->input('txtPaginas'),
            "editorial"=> $request->input('txtEditorial'),
            "correo"=> $request->input('txtEmail'),

            "updated_at"=> Carbon::now()
        ]);
        $ConsultaAutores = DB::table('tb__autores')->get();
        return redirect('libro')->with('Actualizado','abc',compact('ConsultaAutores'));
    }

    public function destroy($id)
    {
        DB::table('tb__libros')->where('idLibro', $id)->delete();
        return redirect('libro')->with('Eliminado','abc');
    }
}
