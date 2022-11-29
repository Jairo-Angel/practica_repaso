@extends('Plantilla')

@section('contenido')
    @if(session()->has('confirmacion'))
    <?php

    $Nom = session()->get('txtNombre_autor');
    
    ?>


        
        <div class="alert alert-success" role="alert">
            <p clas="">Autor {{$Nom}} guardado </p>
        </div>
      
      
      
        
    @endif

<div class="container mt-5 col-md-5 " id="cont">
      
    
      
      
       
    <div class="card mb-5 fw-bold fst-italic " id="cont"> 

    <div class="card-header text-center text-white fs-2">
        Registrar Autor
    </div>
    @if($errors->any())

    @foreach($errors->all() as $error)


    @endforeach
    @endif
        <div class="card-body text-center">

            <form class="m-4" method="post" action="GuardarAutor" >
                @csrf
                <div class="mb-3">
                    <label class="form-label text-white fw-semibold"> Nombre completo: </label>
                    <input type="text" class="form-control" name="txtNombre_autor" id="id" value="{{old('txtNombre_autor')}}" placeholder="Nombre completo" >
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtNombre_autor') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white fw-semibold"> Fecha de nacimiento: </label>
                    <input type="date" class="form-control" name="txtFecha_Nacimiento" id="id" value="{{old('txtFecha_Nacimiento')}}" placeholder="Fecha de nacimiento">
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtFecha_Nacimiento') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white fw-semibold"> No. libros publicados: </label>
                    <input type="number" class="form-control" name="Libros" id="id" value="{{old('Libros')}}" placeholder="No. libros publicados">
                    <p class="text-dark fst-italic fw-bold"> {{ $errors->first('Libros') }}</p>
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