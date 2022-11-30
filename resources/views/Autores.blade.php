@extends('Plantilla')
@section('contenido')

    <div class="container mt-5 col-md-7"> 
        @if(session()->has('Confirmacion'))
    <?php

    $Nom = session()->get('txtNombre_autor');

    ?>


        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Autor {{$Nom}} guardado</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>  
    @endif
        <h1 class="text-center text-white">Autores</h1>
        
            <table class="table table-striped text-center" id="cont" >
                <thead id="hey">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">No. libros publicados:</th>
                    
                    
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"></th>
                    <td>}</td>
                    <td></td>
                    <td></td>
                    
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Rosas</td>
                    <td>Blancas</td>
                    <td>20</td>
                    
                </tr>
                
                </tbody>
            
        </table>
    </div>
@stop