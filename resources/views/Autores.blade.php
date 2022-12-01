@extends('Plantilla')
@section('contenido')


    <div class="container mt-5 col-md-7"> 
        @if(session()->has('Confirmacion'))
        
        <?php

        $Nom = session()->get('txtNombre_autor');
            
        ?>
            {!!"<script>  Swal.fire(
                'Todo correcto!',
                'El autor¨{$Nom}¨ Guardado!',
                'success'
            ) </script> "!!}

        @endif

    @if(session()->has('Eliminado'))
            
    
        {!!"<script>  Swal.fire(
            'Todo correcto!',
            'Autor eliminado!',
            'success'
        ) </script> "!!}

       


         
    @endif
    <div class="mb-5">
        <h1 class="text-center fw-bold">Autores</h1>
    </div>
        
            <table class="table table-striped text-center " id="cont" >
                <thead id="hey">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">No. libros publicados:</th>
                    <th scope="col">Acciones:</th>
                    
                    
                </tr>
                </thead>
                <tbody>
                    @forelse ($ConsultaAutor as $row)
                <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->nombre}}</td>
                    <td>{{$row->fecha_nac}}</td>
                    <td>{{$row->numero_libros}}</td>
                    <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalActualizar-{{$row->id}}">
                        Actualizar <i class="bi bi-pencil-square"></i>
                      </button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" 
                      data-bs-target="#modalEliminar-{{$row->id}}">
                        Eliminar <i class="bi bi-trash3-fill"></i>
                      </button>
                    </td>
                    @include('Editar_autores')

                    @include('Eliminar_autores')
                   
                    
                </tr>
              @empty
                <p>No hay registros</p>
                @endforelse
                </tbody>
            
        </table>
    </div>
    
    
@stop