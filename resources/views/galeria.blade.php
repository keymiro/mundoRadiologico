@extends('layouts.nav')

@section('content')
 <!-- ======= Top Bar ======= -->
 @include('layouts.topbar')
</br></br></br></br>
  <main id="main">
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container">

          <div class="section-title">
            <h2>Clientes</h2>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row no-gutters " >
              {{-- foreach galeria --}}
               @foreach ($info as $i)
                  @if($i->category->title=='galeria')
<<<<<<< Updated upstream
                  <div class="col-lg-3 col-md-4">
                      <div class="gallery-item">
                          <a href="{{Storage::url($i->url)}}" class="galelry-lightbox">
                              <img src="{{Storage::url($i->url)}}" alt="" class="img-fluid">
=======
                  <div class="col-3">
                      <div class="gallery-ite1m" >
                          <a  class="galelry-lightbox" >
                            <div ><img src="{{Storage::url($i->url)}}"   class="img-fluid" ></div>
>>>>>>> Stashed changes
                          </a>
                          </div>
                      </div>
                  @endif
              @endforeach
            </div>

        </div>
      </section><!-- End Gallery Section -->
</main>

  <!-- ======= Footer ======= -->
 @include('layouts.footer')

@endsection