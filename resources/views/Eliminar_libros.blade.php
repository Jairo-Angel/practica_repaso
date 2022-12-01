<!-- Modal -->
<div class="modal fade" id="modalEliminarlib-{{$con->idLibro}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEliminarlib" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="m-4" method="post" action="{{route('libro.destroy',$con->idLibro)}}">
          @csrf

          {!!method_field('DELETE')!!}


        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Seguro que deseas Eliminar el libro?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <h5 class="card-title">{{$con->titulo}}</h5>
              
              
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Eliminar</button>
        </form>
        </div>
      </div>
    </div>
  </div>