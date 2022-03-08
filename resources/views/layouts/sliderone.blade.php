@php
  $r=1;
  $rr=1;
@endphp
<div id="carouselExampleInterval" class="carousel slide shadow" data-ride="carousel">
    <div class="carousel-inner">
    @foreach ($info as $x)
      @if($x->category->title=='Fotos')
    @if($r==1)
      <div class="carousel-item active" data-interval="2000">
        <img src="{{Storage::url($x->url)}}" class="d-block w-100 rounded" alt="...">
      </div>
    @endif
      @if($r>1)
      <div class="carousel-item" data-interval="2000">
        <img src="{{Storage::url($x->url)}}" class="d-block w-100 rounded" alt="...">
      </div>
@endif
@php
$r=2;
@endphp
@endif
@endforeach
    </div>
  </div>

