@extends('layouts.nav')

@section('content')
 <!-- ======= Top Bar ======= -->
 @include('layouts.topbar')
</br></br></br></br>
  {{-- style="margin-bottom:-100px;width: 100%;height: 70vh;" --}}
  <!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="padding: 0px;">
    <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark  carousel-fade slide " data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ( $info as $i)
                    @if($i->category->title=='slider')
                    <button  type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$i->id}}" aria-label="" class="@if($loop->index==0) active @endif active"></button>
                    @endif
                @endforeach
            </div>
            {{-- Foreach slider carrousel --}}

            @foreach ($info as $i)
                @if($i->category->title=='slider')
                <div class="carousel-item active @if($loop->index==0) active @endif" data-bs-interval="2000">
                    <img src="{{asset($i->url)}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5>{{$i->title}}</h5>
                        <p>{{$i->description}}.</p>
                    </div>
                </div>
                @endif
            @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
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
                <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class='bx bx-check-square'></i>
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
