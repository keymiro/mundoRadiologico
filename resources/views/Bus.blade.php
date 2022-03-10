@extends('template')

@section('content')
  <main id="main">
<section id="dd" class="testimonials">
    <div class="container">
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <h2 class="text-center my-4">Buscador</h2>
                                  <div class="card shadow rounded">
                                      <div class="card-header">
                                        <form class="form-inline my-2 my-lg-0" method="post" action="{{route('searchAll')}}">
                                            @csrf
                                             <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                          </form>
                                      </div>
                                      <div class="card-body">
                                
                                  </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
</section><!-- End Testimonials Section -->
  </main>
@endsection

