

<!-- Modal -->
<div class="modal fade" id="modalActualizar-{{$row->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalActualizar" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Autor</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       

        <div class="modal-body">
          <form class="m-4" method="post" action="{{route('autor.update',$row->id)}}">
                
            @csrf

            {!!method_field('PUT')!!}

            <div class="mb-3">
                <label class="form-label  fw-semibold"> Nombre completo: </label>
                <input type="text" class="form-control" name="txtNombre_autor" id="id" value="{{$row->nombre}}" placeholder="Nombre completo" >
                <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtNombre_autor') }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label  fw-semibold"> Fecha de nacimiento: </label>
                <input type="date" class="form-control" name="txtFecha_Nacimiento" id="id" value="{{$row->fecha_nac}}" placeholder="Fecha de nacimiento">
                <p class="text-dark fst-italic fw-bold"> {{ $errors->first('txtFecha_Nacimiento') }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label  fw-semibold"> No. libros publicados: </label>
                <input type="text" class="form-control" name="Libros" id="id" value="{{$row->numero_libros}}" placeholder="No. libros publicados">
                <p class="text-dark fst-italic fw-bold"> {{ $errors->first('Libros') }}</p>
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
  