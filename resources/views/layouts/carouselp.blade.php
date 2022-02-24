<div class="container-fluid">
    @php
      $re=1;
      $ree=0;
      $er=1;
    @endphp
      <!-- Inicio de Carrusel-->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
          @foreach ($info as $tt)
          @if($tt->category->title=='slider')
          @if($re==1)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$ree}}" class="active" aria-current="true" aria-label=""></button>
          @endif
          @if($re>1)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$ree}}" aria-label=""></button>
          @endif
          @php
            $ree=$ree+1;
          @endphp
          @php
            $re=2;
          @endphp
          @endif
          @endforeach
      </div>
      <div class="carousel-inner">
          <!--Image-->
            @foreach ($info as $ter)
            @if($ter->category->title=='slider')
            @if($er==1)
            <div class="carousel-item active">
              <img src="{{Storage::url($ter->url)}}" class="d-block w-100" alt="Dato1">
            </div>
            @endif
            @if($er>1)
            <div class="carousel-item">
              <img src="{{Storage::url($ter->url)}}" class="d-block w-100" alt="Dato2">
            </div>
            @endif
            @php
              $er=2;
            @endphp
            @endif
            @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>
      <!-- Fin de Carrusel-->