@extends('template')

@section('content')
  <main id="main">
<section id="dd" class="testimonials">
    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    @foreach ($info as $i)
                    @if($i->category->title=='covid-19')
                            <h2 class="text-centet text-dark">{{$i->title}}</h2>
                  </button>
                </h2>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    {!!$i->descriptionck!!}
                </div>
                @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>
</section><!-- End Testimonials Section -->
  </main>
@endsection
