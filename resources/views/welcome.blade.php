@extends('layouts.nav')

@section('content')
 <!-- ======= Top Bar ======= -->
 @include('layouts.topbar')
  {{-- style="margin-bottom:-100px;width: 100%;height: 70vh;" --}}
  <!-- ======= Hero Section ======= -->
<section>
    <div class="container-fluid">
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">

                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"  aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"  aria-label="Slide 3"></button>

        </div>
        <div class="carousel-inner">
                    <div class="carousel-item active">
                        @foreach ($info as $i)
                            @if($i->category->title=='slider')
                                <img src="{{Storage::url($i->url)}}" class="d-block w-100" alt="...">
                            @endif
                        @endforeach
                        <div class="carousel-caption d-none d-md-block">
                          {{-- <h5>First slide label</h5>
                          <p>Some representative placeholder content for the first slide.</p> --}}
                        </div>
                    </div>
                    <div class="carousel-item">
                        @foreach ($info as $i)
                            @if($i->category->title=='slider1')
                                <img src="{{Storage::url($i->url)}}" class="d-block w-100" alt="...">
                            @endif
                        @endforeach
                        <div class="carousel-caption d-none d-md-block">
                          {{-- <h5>First slide label</h5>
                          <p>Some representative placeholder content for the first slide.</p> --}}
                        </div>
                    </div>
                    <div class="carousel-item">
                        @foreach ($info as $i)
                            @if($i->category->title=='slider2')
                                <img src="{{Storage::url($i->url)}}" class="d-block w-100" alt="...">
                            @endif
                        @endforeach
                        <div class="carousel-caption d-none d-md-block">
                          {{-- <h5>First slide label</h5>
                          <p>Some representative placeholder content for the first slide.</p> --}}
                        </div>
                    </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
</section>
  
<!-- Menu de servicios-->

@php
      $e=1;
      $f=1;
@endphp
<div class="container" id="navge" >
<div class="d-flex align-items-start" id="navgea">
  <div class="nav flex-column  me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  @foreach ($info as $i)
  @if($i->category->title=='services')
  @if($e==1)
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><li class="flech"></li>{{$i->title}}</button>
  @endif
  @if($e>1)
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v{{$i->id}}" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><li class="flech"></li>{{$i->title}}</button>
    @endif
    @php
      $e=$i->id;
  @endphp
    @endif
  @endforeach
  </div>
  <div class="tab-content" id="v-pills-tabContent">
  @foreach ($info as $i)
  @if($i->category->title=='services')  
  @if($f==1)
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <h1> {{$i->title}}</h1>  
    {!!$i->descriptionck!!}</div>
    @endif
  @if($f>1)
    <div class="tab-pane fade" id="v{{$i->id}}" role="tabpanel" aria-labelledby="v-pills-profile-tab">
    <h1> {{$i->title}} </h1>    
    {!!$i->descriptionck!!}</div>
    @endif
    @php
      $f=$i->id;
  @endphp
    @endif
  @endforeach
  </div>
</div>
</div>



<!-- End .content-->
    </section><!-- End Why Us Section -->
  </main><!-- End #main -->
  @include('layouts.footer')
  <!-- ======= Footer ======= -->

@endsection
