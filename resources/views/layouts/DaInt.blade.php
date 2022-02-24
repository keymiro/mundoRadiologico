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
            <div class="carousel-item active" id="datos" data-bs-interval="3500">
              <div id="carousel-Tittle" >
                <h1>{{$Dat->title}}</h1>
              </div>
              <div id="carousel-img">
                <img src="{{Storage::url($Dat->url)}}" alt="" class="img-fluid" id="ImaInf">
              </div>
            </div>
          @endif
          @if($D>1)
            <div class="carousel-item"  id="datos" data-bs-interval="3500"> 
              <div id="carousel-Tittle" >
                <h1>{{$Dat->title}}</h1>
              </div>
              <div id="carousel-img">
                <img src="{{Storage::url($Dat->url)}}" class="img-fluid" alt="" id="ImaInf">
              </div>
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