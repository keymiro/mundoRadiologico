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
                                    <h2>Estados Financieros</h2>
                                </div>
                    <div class="accordion accordion-flush" id="DatosInteres" >
@foreach ($info as $EF)
@if($EF->category->title=='Estadosfinancieros')
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading{{$EF->id}}">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$EF->id}}" aria-expanded="false" aria-controls="flush-collapseOne">
      <p>{{$EF->title}}</p>
      </button>
    </h2>
    <div id="flush-collapse{{$EF->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><p>{!!$EF->descriptionck!!}</p></div>
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



