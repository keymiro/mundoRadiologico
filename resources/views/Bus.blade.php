@extends('layouts.nav')

@section('content')
 <!-- ======= Top Bar ======= -->
 @include('layouts.topbar')
</br></br></br></br>
  <main id="main">
<section id="dd" class="testimonials">
    <div class="container">
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="section-title">
                                    <h2>Buscador</h2>
                                </div>
                                <form action="">
                                  <div>
                                  <input type="text" placeholder="Ingresa Palabra Clave">
                                  <button type="button" class="btn btn-outline-primary">Buscar</button>
                                  </div>
                                </form>
                    </div>
                </div>
           </div>
        </div>
    </div>
</section><!-- End Testimonials Section -->
  </main>
 @include('layouts.footer')
@endsection

