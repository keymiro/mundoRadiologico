<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto: gerencia@mundoradiologico.com">gerencia@mundoradiologico.com</a>
        {{-- <i class="bi bi-phone"></i> Tel (8) 633 3216 --}}
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="{{route('login')}}">Ingresar</a>
        <a href="https://www.facebook.com/mundoradiologico/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.youtube.com/watch?v=VGlyOMhheW0"><i class="bi bi-youtube"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">
        @foreach ($info as $i)
            @if($i->category->title=='logo')
            <a href="{{route('index')}}"> <img src="{{Storage::url($i->url)}}" alt="" class="img-fluid" style="width:200%"></a>
            @endif
        @endforeach
    </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto {{request()->is('Inicio')? 'active':'' }}" href="{{route('index')}}">Inicio</a></li>
          <li><a class="nav-link scrollto {{request()->is('Nosotros')? 'active':'' }}" href="{{route('nosotros')}}">Nosotros</a></li>
          <li><a class="nav-link scrollto {{request()->is('Servicios')? 'active':'' }}" href="{{route('servicios')}}">Servicios</a></li>
          {{-- <li><a class="nav-link scrollto" href="#departments">Área</a></li> --}}
          <li><a class="nav-link scrollto {{request()->is('Medicos')? 'active':'' }}" href="{{route('medicos')}}">Médicos</a></li>
          <li class="dropdown"><a href="#"><span>Más</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="{{request()->is('Galeria')? 'active':'' }}" href="{{route('galeria')}}">Galería</a></li>
              <li><a class="{{request()->is('Preguntas-frecuentes')? 'active':'' }}" href="{{route('faq')}}">Preguntas frecuentes</a></li>
              <li class="dropdown"><a href="#"><span>Información al usuario</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  {{-- <li><a href=""></a></li> --}}
                  <li><a href="#dd">Derechos y deberes</a></li>
                  <li><a href="#">Covid-19</a></li>
                  <li><a href="#">PQR</a></li>
                  <li>
                         {{-- @foreach ($info as $i)
                                @if($i->category->title=='Estado situación financiera')
                                    <a href="{{Storage::url($i->url)}}">Estado situación financiera</a>
                                @endif
                            @endforeach --}}
                 </li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Apartar</span> Cita</a>

    </div>
  </header><!-- End Header -->
