@extends('layouts.nav')

@section('content')
 <!-- ======= Top Bar ======= -->
 @include('layouts.topbar')
</br></br></br></br>
  <main id="main">
    <!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">
        <div class="section-title">
            @foreach ($info as $i)
            @if($i->category->title=='servicios')
                <h2><a href="">{{$i->title}}</a></h2>
                <p class="description">{{$i->description}}</p>
            @endif
        @endforeach
        </div>
        <div class="row">

            @foreach ($info as $i)
                @if($i->category->title=='services')
                <div class="col-lg-4 col-md-6 align-items-stretch  mt-4">
                    <a class="btn btn-primary text-white" data-bs-toggle="collapse" href="#serv{{$i->id}}ices" role="button" aria-expanded="false" aria-controls="serv{{$i->id}}ices">
                        {{$i->title}}  - <img class="img-fluid" src="{{Storage::url($i->url)}}" alt="" style="width: 13%">
                      </a>
                      <div class="collapse" id="serv{{$i->id}}ices">
                        <div class="card card-body">
                            <h4><a href=""></a></h4>
                            <p>{!!$i->descriptionck!!}</p>
                        </div>
                      </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section><!-- End Services Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 @include('layouts.footer')

@endsection
