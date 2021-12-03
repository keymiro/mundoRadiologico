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
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch  mt-4">
                    <div class="icon-box">
                            <div class="icon"><img class="img-fluid" src="{{Storage::url($i->url)}}" alt=""></div>
                            <h4><a href="">{{$i->title}}</a></h4>
                            <p>{!!$i->descriptionck!!}</p>
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
