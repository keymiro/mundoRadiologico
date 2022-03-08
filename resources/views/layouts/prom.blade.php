
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        @foreach ($info as $xx)
            @if($xx->category->title=='Inicio')
            <h5 class="modal-title" id="staticBackdropLabel">{{$xx->title}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {!!$xx->descriptionck!!}
        </div>
            @endif
        @endforeach
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
        </div>
      </div>
    </div>
  </div>
