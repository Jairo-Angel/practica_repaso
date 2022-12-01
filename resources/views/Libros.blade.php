@extends('Plantilla')
@section('contenido')

@if(session()->has('Confirmacion'))
            
    
        {!!"<script>  Swal.fire(
            'Todo correcto!',
            'Libro Registrado!',
            'success'
        ) </script> "!!}

    @endif
    @if(session()->has('Eliminado'))
            
    
    {!!"<script>  Swal.fire(
        'Todo correcto!',
        'Libro eliminado!',
        'success'
    ) </script> "!!}

    @endif

    @if(session()->has('Actualizado'))
            
    
    {!!"<script>  Swal.fire(
        'Todo correcto!',
        'Libro editado!',
        'success'
    ) </script> "!!}

    @endif

    <div class="container mt-5 col-md-7"> 

        <h1 class="text-center text-white">Libros</h1>
            <table class="table table-striped text-center" id="cont" >
                <thead id="hey">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Autor:</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Titulo:</th>
                    <th scope="col">Páginas:</th>
                    <th scope="col">Editorial: </th>
                    <th scope="col">Correo:</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    
                    
                </tr>
                </thead>
                <tbody>
                    
                    @foreach($ConsultaLibros as $con)
                <tr>
                    

                    <th scope="row">{{$con->idLibro}}</th>
                    <td>{{$con->id_Autor}}</td>
                    <td>{{$con->isbn}}</td>
                    <td>{{$con->titulo}}</td>
                    <td>{{$con->numeropag}}</td>
                    <td>{{$con->editorial}}</td>
                    <td>{{$con->correo}}</td>
                    <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalActualizar-{{$con->idLibro}}">
                        Actualizar <i class="bi bi-pencil-square"></i>
                      </button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" 
                      data-bs-target="#modalEliminarlib-{{$con->idLibro}}">
                        Eliminar <i class="bi bi-trash3-fill"></i>
                      </button>
                    </td>
                   
                </tr>
                @include('Editar_libros')

                @include('Eliminar_libros')
                @endforeach
              
                
                
                </tbody>
            </table>
        </table>
    
    
    
    </div>

@stop