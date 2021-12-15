@extends('layouts.nav')

@section('content')
 <!-- ======= Top Bar ======= -->
 @include('layouts.topbar')
  {{-- style="margin-bottom:-100px;width: 100%;height: 70vh;" --}}
  <!-- ======= Hero Section ======= -->
<section>
    <div class="container">
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
  <main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
                @foreach ($info as $i)
                    @if($i->category->title=='asider-azul')
                    <h3>{{$i->title}}</h3>
                    <p class="description">{{$i->description}}</p>
                    @endif
                @endforeach
              {{-- <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div> --}}
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                @foreach ($info as $i)
                @if($i->category->title=='Portafolio')
                <div  class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0 " >
                    <div class="pic"><img src="{{Storage::url($i->url)}}" class="img-fluid" alt=""></div>
                      <h4>{{$i->title}}</h4>
                      <p>{{$i->description}}</p>
                    </div>
                  </div>
                @endif
            @endforeach
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
  </main><!-- End #main -->
  @include('layouts.footer')
  <!-- ======= Footer ======= -->

@endsection
