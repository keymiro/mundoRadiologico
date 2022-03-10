@php
  $D=1;
@endphp
<div id="carouselExampleCaptions" class="carousel slide shadow" data-ride="carousel">
    <div class="carousel-inner">
    @foreach ($info as $Dat)
        @if($Dat->category->title=='Foro')
          @if($D==1)
      <div class="carousel-item active">
        <img id="car2" src="{{Storage::url($Dat->url)}}" class="img-fluid" data-interval="2000" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>{{$Dat->title}}</h5>
        </div>
      </div>
      @endif
      @if($D>1)
      <div class="carousel-item">
        <img id="car2" src="{{Storage::url($Dat->url)}}" class="img-fluid" data-interval="2000" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>{{$Dat->title}}</h5>
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
