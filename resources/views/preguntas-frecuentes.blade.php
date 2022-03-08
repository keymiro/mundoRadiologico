@extends('template')

@section('content')
  <main id="main">
     <!-- ======= Frequently Asked Questions Section ======= -->
     <section id="faq" class="faq section-bg">
        <div class="container">

          <div class="section-title text-center">
            <h2>Preguntas frecuentes</h2>
          </div>
          <div class="accordion" id="accordionExample">
            @foreach ($info as $i)
            @if($i->category->title=='preguntas')
            <div class="card my-4">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#{{$i->description}}" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-question-circle"></i> {{$i->title}}
                  </button>
                </h2>
              </div>

              <div id="{{$i->description}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <p>{!!$i->descriptionck!!}</p>
                </div>
              </div>
            </div>
            @endif
            @endforeach
          </div>
        </div>
      </section><!-- End Frequently Asked Questions Section -->
    </main>
 @endsection
