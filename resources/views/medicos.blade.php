@extends('layouts.nav')

@section('content')
 <!-- ======= Top Bar ======= -->
 @include('layouts.topbar')
</br></br></br></br>
  <main id="main">
    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
        <div class="container">

          <div class="section-title">
            <h2> <a href="">Médicos</a></h2>

          </div>

          <div class="row">
            @foreach ($info as $i)
            @if($i->category->title=='medico')
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member d-flex align-items-start shadow">
                  <div class="pic"><img src="{{Storage::url($i->url)}}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>{{$i->title}}</h4>
                    <p>{{$i->description}}</p>
                  </div>
                </div>
              </div>
            @endif
            @endforeach
          </div>

        </div>
      </section><!-- End Doctors Section -->

    </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 @include('layouts.footer')

@endsection
