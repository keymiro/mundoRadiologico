@extends('layouts.nav')

@section('content')
 <!-- ======= Top Bar ======= -->
 @include('layouts.topbar')
</br></br></br></br>
  <main id="main">
     <!-- ======= Frequently Asked Questions Section ======= -->
     <section id="faq" class="faq section-bg">
        <div class="container">

          <div class="section-title">
            <h2>Preguntas frecuentes</h2>
          </div>
          <div class="faq-list">
            <ul>
              @foreach ($info as $i)
                   @if($i->category->title=='preguntas')
                      <li data-aos="fade-up">
                          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#{{$i->description}}">{{$i->title}}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                              <div id="{{$i->description}}" class="collapse" data-bs-parent=".faq-list">
                                  <p>{!!$i->descriptionck!!}</p>
                              </div>
                      </li>
                  @endif
              @endforeach
            </ul>
          </div>

        </div>
      </section><!-- End Frequently Asked Questions Section -->
    </main>
  <!-- ======= Footer ======= -->
 @include('layouts.footer')

@endsection
