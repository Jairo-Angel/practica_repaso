@extends('Plantilla')
@section('contenido')
    <div class="container mt-5 col-md-7"> 

        <h1 class="text-center text-white">Libros</h1>
            <table class="table table-striped text-center" id="cont" >
                <thead id="hey">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Titulo de Libro:</th>
                    <th scope="col">Autor:</th>
                    <th scope="col">Numero de Páginas:</th>
                    <th scope="col">Editorial : </th>
                    <th scope="col">Email de Editorial:</th>
                    
                    
                    
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Gerbera</td>
                    <td>Rosa</td>
                    <td>49</td>
                    <td>Gerbera</td>
                    <td>Rosa</td>
                    <td>49</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Rosas</td>
                    <td>Blancas</td>
                    <td>20</td>
                    <td>Gerbera</td>
                    <td>Rosa</td>
                    <td>49</td>
                    
                </tr>
                
                </tbody>
            </table>
        </table>
    
    
    
    </div>

@stop