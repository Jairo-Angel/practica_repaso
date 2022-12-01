

<!-- Modal -->
<div class="modal fade" id="modalActualizar-{{$con->idLibro}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalActualizar" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Libro</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       

        <div class="modal-body">
          <form class="m-4" method="post" action="{{route('libro.update',$con->idLibro)}}">
                
            @csrf

            {!!method_field('PUT')!!}

            <div class="mb-3">
                <label class="form-label fw-semibold"> ISBN: </label>
                <input type="number" class="form-control" name="txtIsbn" id="id" value="{{$con->isbn}}" placeholder="Ingresa el ISBN" >
                <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtIsbn') }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label  fw-semibold"> Titulo de Libro: </label>
                <input type="text" class="form-control" name="txtTitulo" id="id" value="{{$con->titulo}}" placeholder="Titulo del libro">
                <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtTitulo') }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label  fw-semibold"> Autor: </label>
                <select name="txtAutor" id="unos" class="form-control" style="background: #d3cbe4;" >
                    <option selected disabled="disabled" value="" style="background: #d3cbe4">Selecciona Autor:</option>
                    @foreach ($ConsultaAutores as $autor)
                        <option value="{{$autor->id}}">{{$autor->nombre}}</option>
                        
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label  fw-semibold"> Numero de Páginas: </label>
                <input type="number" class="form-control" name="txtPaginas" id="id" value="{{$con->numeropag}}" placeholder="Num. de Páginas">
                <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtPaginas') }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label  fw-semibold"> Editorial : </label>
                <input type="text" class="form-control" name="txtEditorial" id="id" value="{{$con->editorial}}" placeholder="Editorial">
                <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtEditorial') }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label  fw-semibold"> Email de Editorial: </label>
                <input type="email" class="form-control" name="txtEmail" id="id" value="{{$con->correo}}" placeholder="Ingresa el email de la editorial">
                <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtEmail') }}</p>
            </div>
            
               
    
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Editar</button>
        </form>
        </div>
      </div>
    </div>
    
  </div>