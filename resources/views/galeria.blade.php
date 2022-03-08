@extends('template')

@section('content')
  <main id="main">
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container">

          <div class="section-title text-center">
            <h2>Nuestros Aliados</h2>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row my-4" >
              {{-- foreach galeria --}}
               @foreach ($info as $i)
                  @if($i->category->title=='galeria')
                <div class="col">
                    <div class="card shadow">
                          <div class="card-body">
                            <a href="{{Storage::url($i->url)}}" class="galelry-lightbox" target="_blank">
                                <img src="{{Storage::url($i->url)}}" alt="" class="img-fluid">
                            </a>
                          </div>
                    </div>
                </div>
                  @endif
              @endforeach
            </div>

        </div>
      </section><!-- End Gallery Section -->
</main>
@endsection
