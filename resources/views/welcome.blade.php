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
                <div  class="col-xl-4 d-flex align-items-stretch my-2">
                    <div class="icon-box mt-4 mt-xl-0 ">
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
      <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active bg-blue" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
          <button class="nav-link bg-blue" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
          <button class="nav-link bg-blue" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
          <button class="nav-link bg-blue" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">1.</div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">2.</div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">3</div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

  </main><!-- End #main -->
  @include('layouts.footer')
  <!-- ======= Footer ======= -->

@endsection
