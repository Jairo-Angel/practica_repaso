@extends('Plantilla')

@section('contenido')
@if(session()->has('Confirmacion'))
<?php

$libro = session()->get('titulo');
    
?>
       {!!"<script>  Swal.fire(
         'Todo correcto!',
         'El libro ¨{$libro}¨ Guardado!',
         'success'
       ) </script> "!!}
    @endif

<div class="container mt-4 col-md-5 " id="cont"> 
    <div class="card mb-5 fw-bold fst-italic " id="cont"> 

    <div class="card-header text-center text-white fs-2">
        Registrar Libro
    </div>
    @if($errors->any())

    @foreach($errors->all() as $error)


    @endforeach
@endif
        <div class="card-body text-center">

            <form class="m-4" method="post" action="GuardarLibro" >
                @csrf
                <div class="mb-3">
                    <label class="form-label text-white fw-semibold"> ISBN: </label>
                    <input type="number" class="form-control" name="txtIsbn" id="id" value="{{old('txtIsbn')}}" placeholder="Ingresa el ISBN" >
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtIsbn') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white fw-semibold"> Titulo de Libro: </label>
                    <input type="text" class="form-control" name="txtTitulo" id="id" value="{{old('txtTitulo')}}" placeholder="Titulo del libro">
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtTitulo') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white fw-semibold"> Autor: </label>
                    <input type="text" class="form-control" name="txtAutor" id="id" value="{{old('txtAutor')}}" placeholder="Autor del libro">
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtAutor') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white fw-semibold"> Numero de Páginas: </label>
                    <input type="number" class="form-control" name="txtPaginas" id="id" value="{{old('txtPaginas')}}" placeholder="Num. de Páginas">
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtPaginas') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white fw-semibold"> Editorial : </label>
                    <input type="text" class="form-control" name="txtEditorial" id="id" value="{{old('txtEditorial')}}" placeholder="Editorial">
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtEditorial') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white fw-semibold"> Email de Editorial: </label>
                    <input type="email" class="form-control" name="txtEmail" id="id" value="" placeholder="Ingresa el email de la editorial">
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtEmail') }}</p>
                </div>
                <div class="text-center text-white fw-semibold">
                    <button type="submit" class="btn btn-secondary" id="hey">Guardar</button>

                </div>
                
                </div>
            </div>
    
        </div>
    </div>
</div>


@stop