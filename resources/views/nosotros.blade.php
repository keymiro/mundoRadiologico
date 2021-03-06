@extends('template')

@section('content')
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
                @foreach ($info as $i)
                @if($i->category->title=='Nosotros')
                    <div class="text-center">
                        <h2><a>{{$i->title}}</a></h2>
                    </div>
                @endif
            @endforeach
        <div class="row">

          <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center row align-items-center position-relative">
                 <iframe width="560" height="800" src="https://www.youtube-nocookie.com/embed/VGlyOMhheW0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
          </div>

          <div class="col-xl-6 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
              <div class="card">
                  <div class="card-body">
                    <h3> @foreach ($info as $i)
                        @if($i->category->title=='Nosotros')
                        <p class="text-center">{{$i->description}}</p>
                        @endif
                    @endforeach
                </h3>
            {{-- <p></p> --}}

                <div class="icon-box">
                    @foreach ($info as $i)
                        @if($i->category->title=='Política de Calidad')
                            <div class="icon"><img src="{{Storage::url($i->url)}}" class="img-fluid" alt="" width="80" height="80"></div>
                            <h4 class="title"><strong> <a href="" class="text-dark">{{$i->title}}</a></strong></h4>
                            <p class="description">{{$i->description}}</p>
                        @endif
                    @endforeach
                </div>

                <div class="icon-box">
                    @foreach ($info as $i)
                        @if($i->category->title=='Nuestra Misión')
                        <div class="icon"><img src="{{Storage::url($i->url)}}" class="img-fluid" alt="" width="80" height="80"></div>
                        <h4 class="title"><strong> <a href="" class="text-dark">{{$i->title}}</a></strong></h4>
                            <p class="description">{{$i->description}}</p>
                        @endif
                    @endforeach
                </div>

                <div class="icon-box">
                    @foreach ($info as $i)
                        @if($i->category->title=='Nuestra Visión')
                            <div class="icon"><img src="{{Storage::url($i->url)}}" class="img-fluid" alt="" width="80" height="80"></div>
                            <h4 class="title"><strong> <a href="" class="text-dark">{{$i->title}}</a></strong></h4>
                            <p class="description">{{$i->description}}</p>
                        @endif
                    @endforeach
                </div>
                  </div>
              </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
  </main><!-- End #main -->
@endsection
