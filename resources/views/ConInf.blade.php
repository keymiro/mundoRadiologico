@extends('template')
@section('content')
  <main id="main">
<section id="dd" class="testimonials">
    <div class="container">
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="section-title text-center">
                                    <h2>Consentimiento Informados</h2>
                                </div>
                                <div class="accordion accordion-flush" id="DatosInteres" >
@foreach ($info as $inf)
@if($inf->category->title=='ConsentimientosInformados')
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading{{$inf->id}}">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$inf->id}}" aria-expanded="false" aria-controls="flush-collapseOne">
      <p>{{$inf->title}}</p>
      </button>
    </h2>
    <div id="flush-collapse{{$inf->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><p>{!!$inf->descriptionck!!}</p></div>
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
@endsection

