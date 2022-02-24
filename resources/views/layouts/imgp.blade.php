<div class="nav-link" id="contNavFull">
<!-- Inicio carucel-->
  @php
      $r=1;
      $rr=1;
  @endphp
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
@foreach ($info as $x)
@if($x->category->title=='Fotos')
  @if($r==1)
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="{{Storage::url($x->url)}}" class="d-block w-100" id="carImg" alt="">
    </div>
  @endif
  @if($r>1)
    <div class="carousel-item" data-bs-interval="5000">
      <img src="{{Storage::url($x->url)}}" class="d-block w-100" id="carImg" alt="...">
    </div>
    @endif
@php
$r=2;
@endphp
@endif
@endforeach
  </div>
</div>
<!-- final carucel-->
</div>