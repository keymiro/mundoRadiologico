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
            <h2>Galería</h2>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row no-gutters">
              {{-- foreach galeria --}}
               {{-- @foreach ($info as $i)
                  @if($i->category->title=='galeria')
                  <div class="col-lg-3 col-md-4">
                      <div class="gallery-item">
                          <a href="" class="galelry-lightbox">
                              <img src="{{Storage::url($i->url)}}" alt="" class="img-fluid">
                          </a>
                          </div>
                      </div>
                  @endif
              @endforeach --}}

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="" class="galelry-lightbox">
                  <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="" class="galelry-lightbox">
                  <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="" class="galelry-lightbox">
                  <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="" class="galelry-lightbox">
                  <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="" class="galelry-lightbox">
                  <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="" class="galelry-lightbox">
                  <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="" class="galelry-lightbox">
                  <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="" class="galelry-lightbox">
                  <img src="https://image.shutterstock.com/image-photo/doctor-man-stethoscope-hospital-260nw-555894940.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Gallery Section -->


  <!-- ======= Footer ======= -->
 @include('layouts.footer')

@endsection
