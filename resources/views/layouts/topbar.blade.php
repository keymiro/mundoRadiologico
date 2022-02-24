<div id="topbar" class="d-flex align-items-center fixed-top" >
    <div class="container d-flex justify-content-between">
      <!--Logo-->
      <div id="logo" class="me-auto">
        <h1 class="logo ">
          @php
            $lg=0;
          @endphp
          @foreach ($info as $l)
            @if($l->category->title=='logo')
              @php
                $lg=$lg+1;
              @endphp
              @if($lg==2)
                <a href="{{route('index')}}"> <img src="{{Storage::url($l->url)}}" alt="LogoEmpresarial" class="img-fluid"></a>
                @php
                  $lg=2;
                @endphp
              @endif
            @endif
          @endforeach
        </h1>
      </div>
      <!--Inicio del navbar-->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto {{request()->is('Inicio')? 'active':'' }}" href="{{route('index')}}">Inicio</a></li>
          <li><a class="nav-link scrollto {{request()->is('Nosotros')? 'active':'' }}" href="{{route('nosotros')}}">Nosotros</a></li>
          <li id="InfUser" class="dropdown"><a href="#"><span>Información al usuario</span> <i class="bi bi-chevron-down"></i></a>
                <ul id="InfU">
                  <li><a class="{{request()->is('PQRS')? 'active':'' }}" href="{{route('pqrs')}}"> <img src="image/6.png" alt="Pqrs"><span>PQRS</span></a></li>
                  <li><a class="{{request()->is('Derechos-y-deberes')? 'active':'' }}" href="{{route('dd')}}"> <img src="image/5.png" alt="Derechos">  <span>Derechos y deberes</span></a></li>
                  <li><a class="{{request()->is('Consentimientos Informados')? 'active':'' }}" href="{{route('ConInf')}}"> <img src="image/7.png" alt="Consentimientos"> <span>Consentimientos informados</span></a></li>
                  <li><a class="{{request()->is('PrDG')? 'active':'' }}" href="{{route('PrDG')}}">  <img src="image/8.png" alt="Preparaciones"><span>Preparaciones para examenes diagnosticos</span> </a></li>
                </ul>
          </li>
          <li id="InfMas" class="dropdown"><a href="#"><span>Más</span> <i class="bi bi-chevron-down"></i></a>
          <ul id="Mas">
              <li><a class="{{request()->is('Clientes')? 'active':'' }}" href="{{route('galeria')}}"> <img src="image/9.png" alt="Aliados"> Nuestros Aliados</a></li>
              <li><a class="{{request()->is('Covid-19')? 'active':'' }}" href="{{route('covid')}}"> <img src="image/10.png" alt="Covid-19">Covid-19</a></li>
              <li><a class="{{request()->is('Preguntas-frecuentes')? 'active':'' }}" href="{{route('faq')}}" > <img src="image/11.png" alt="Preguntas frecuentes">Preguntas frecuentes</a></li>
              <li><a class="{{request()->is('Trabaja Con Nosotros')? 'active':'' }}" href="{{route('TrabNos')}}">  <img src="image/12.png" alt="Trabaje con nosostros"> Trabaja con nosotros</a></li>
              <li><a class="{{request()->is('Estados Fianancieros')? 'active':'' }}" href="{{route('finan')}}"> <img src="image/13.png" alt="Estados financieros">Estados financieros</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto {{request()->is('Contacto')? 'active':'' }}" href="{{route('contact')}}">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        <!--Botones Azules-->
        <div id="NavBott">
          <a href="{{route('cita')}}" class="appointment-btn scrollto {{request()->is('Cita')? 'text-info':'' }}"><span class="d-none d-md-inline">Agendar</span> Cita</a>
          <a href="" class="appointment-btn scrollto " data-bs-toggle="modal" onclick="miFunc()" data-bs-target="#encuesta">Resultado Examenes</a>
          <a href="{{route('search')}}" class="appointment-btn scrollto "><i class="bi bi-search"> </i>Buscar</a>
        </div>
      </nav>
    <!--Ingreso y redes sociales-->
      <div class="d-none d-lg-flex social-links align-items-center" id="SocialR">
        <a href="{{route('login')}}">Ingresar</a>
        <a href="https://www.instagram.com/mundoradiologicosas/" class="Instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.facebook.com/mundoradiologico/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.youtube.com/channel/UCJslrQjl32e3U5e1zkaYnsg"><i class="bi bi-youtube"></i></a>
      </div>
    <!--Encuesta de satisfacción-->
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
                <span style=" text-align: center;">Diligencia la siguiente encuesta para reclamar sus resultados:</span><br>
                <br>
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
          <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paciente">Siguiente</button>
        </div>
    </form>
      </div>
    </div>
  </div>
    <!--########################-->
    </div>
  </div>
  


