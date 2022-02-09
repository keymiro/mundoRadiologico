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
                                    <h2>Datos de Interes</h2>
                                </div>
                                <div class="faq-list">
<div class="accordion accordion-flush" id="DatosInteres" >
@foreach ($info as $in)
@if($in->category->title=='Foro')
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading{{$in->id}}">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$in->id}}" aria-expanded="false" aria-controls="flush-collapseOne">
      <p>{{$in->title}}</p>
      </button>
    </h2>
    <div id="flush-collapse{{$in->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><p>{!!$in->descriptionck!!}</p></div>
    </div>
  </div>
 @endif
@endforeach
</div>

          
                            
                    </div>
                </div>
           </div>
        </div>
    </div>
</section><!-- End Testimonials Section -->
  </main>
 @include('layouts.footer')
@endsection

