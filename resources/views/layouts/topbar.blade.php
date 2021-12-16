<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto: Mundoradiologico@gmail.com">Mundoradiologico@gmail.com</a>
        {{-- <i class="bi bi-phone"></i> Tel (8) 633 3216 --}}
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="{{route('login')}}">Ingresar</a>
        <a href="https://www.facebook.com/mundoradiologico/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.youtube.com/channel/UCJslrQjl32e3U5e1zkaYnsg"><i class="bi bi-youtube"></i></a>
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
          <li class="dropdown"><a href="#"><span>Información al usuario</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  {{-- <li><a href=""></a></li> --}}
                  <li><a class="{{request()->is('PQRS')? 'active':'' }}" href="{{route('pqrs')}}">PQRS</a></li>
                  <li><a class="{{request()->is('Derechos-y-deberes')? 'active':'' }}" href="{{route('dd')}}">Derechos y deberes</a></li>
                  <li><a class="{{request()->is('Consentimientos Informados')? 'active':'' }}" href="{{route('ConInf')}}">Consentimientos informados</a></li>
                  <li><a class="{{request()->is('PrDG')? 'active':'' }}" href="{{route('PrDG')}}">Preparaciones para examenes diagnosticos</a></li>
                </ul>
              </li>
          {{-- <li><a class="nav-link scrollto" href="#departments">Área</a></li> --}}
              <li class="dropdown"><a href="#"><span>Más</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              <li><a class="{{request()->is('Clientes')? 'active':'' }}" href="{{route('galeria')}}">Clientes</a></li>
              <li><a class="{{request()->is('Covid-19')? 'active':'' }}" href="{{route('covid')}}">Covid-19</a></li>
              <li><a class="{{request()->is('pqr')? 'active':'' }}" href="{{route('pqr')}}">PQR</a></li>
              <li><a class="{{request()->is('Preguntas-frecuentes')? 'active':'' }}" href="{{route('faq')}}">Preguntas frecuentes</a></li>
              <li><a class="{{request()->is('Estados Fianancieros')? 'active':'' }}" href="{{route('finan')}}">Estados financieros</a></li>
                         {{-- @foreach ($info as $i)
                                @if($i->category->title=='Estado situación financiera')
                                    <a href="{{Storage::url($i->url)}}">Estado situación financiera</a>
                                @endif
                            @endforeach --}}
              </li>
              <li><a class="{{request()->is('Trabaja Con Nosotros')? 'active':'' }}" href="{{route('TrabNos')}}">Trabaja con nosotros</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto {{request()->is('Contacto')? 'active':'' }}" href="{{route('contact')}}">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="{{route('cita')}}" class="appointment-btn scrollto {{request()->is('Cita')? 'text-info':'' }}"><span class="d-none d-md-inline">Apartar</span> Cita</a>
      <a href="" class="appointment-btn scrollto " data-bs-toggle="modal" data-bs-target="#encuesta">Paciente</a>
    </div>
  </header><!-- End Header -->

  <div class="modal fade" id="encuesta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Encuesta de sastifación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('encuesasti')}}" method="POST">
            @csrf
              <p>
                ¿Cómo calificaría su experiencia global respecto a los servicios de salud que ha recibido a través de su IPS?
              </p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="e1" id="flexRadioDefault1" value="Muy buena">
                <label class="form-check-label" for="flexRadioDefault1">
                  Muy buena
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="e2" id="flexRadioDefault2" value="Buena">
                <label class="form-check-label" for="flexRadioDefault2">
                  Buena
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="e3" id="flexRadioDefault3" value="Regular">
                <label class="form-check-label" for="flexRadioDefault3">
                  Regular
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="e4" id="flexRadioDefault4" value="Mala">
                <label class="form-check-label" for="flexRadioDefault4">
                  Mala
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="e5" id="flexRadioDefault5"value="Muy Mala">
                <label class="form-check-label" for="flexRadioDefault5">
                  Muy Mala
                </label>
              </div>

            <hr>
              <p>¿ Recomendaría a sus familiares y amigos esta IPS?</p>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="r1" id="flexRadioDefault6" value="Definitivamente si">
                <label class="form-check-label" for="flexRadioDefault6">
                    Definitivamente si
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="r2" id="flexRadioDefault7" value="Probablemente si">
                <label class="form-check-label" for="flexRadioDefault7">
                    Probablemente si
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="r3" id="flexRadioDefault8" value="Definitivamente no">
                <label class="form-check-label" for="flexRadioDefault8">
                    Definitivamente no
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="r4" id="flexRadioDefault9" value="Probablemente no">
                <label class="form-check-label" for="flexRadioDefault9">
                    Probablemente no
                </label>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paciente">Enviar</button>
        </div>
    </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="paciente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Resultados Paciente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <a href="">Imagenes</a>
        </br>
         <a href="">Reportes</a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
