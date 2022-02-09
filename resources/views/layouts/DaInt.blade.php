<!-- Datos de Interes-->
@php
  $D=1;
@endphp
<div class="container"  id="ForoCrousel" >
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  @foreach ($info as $Dat)
  @if($Dat->category->title=='Foro')
    @if($D==1)
    <div class="carousel-item active"  data-bs-interval="3500">
    <h1>{{$Dat->title}}</h1>
    <p>{!!$Dat->descriptionck!!}</p>
    </div>
    @endif
    @if($D>1)
    <div class="carousel-item"  data-bs-interval="3500"> 
    <h1>{{$Dat->title}}</h1>
    <p>{!!$Dat->descriptionck!!}</p>
    </div>
    @endif
      @php
      $D=$Dat->id;
      @endphp
  @endif
  @endforeach
  </div>
</div>
</div>