<nav class="navbar navbar-light align-items-start bg-light">
    <div class="row ml-auto">
        <a class="text-dark mx-4" href="{{route('login')}}" target="_blank">Ingresar  <i class="fas fa-sign-in-alt"></i></a>
        <a class="text-dark mx-4" href="https://www.instagram.com/mundoradiologicosas/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a class="text-dark mx-4" href="https://www.facebook.com/mundoradiologico/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a class="text-dark mx-4" href="https://www.youtube.com/channel/UCJslrQjl32e3U5e1zkaYnsg" target="_blank"><i class="fab fa-youtube"></i></a>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-blue shadow">
    <a class="navbar-brand" href="#">
        @foreach ($info as $l)
            @if($l->category->title=='logo')
                <a href="{{route('index')}}"> <img src="{{Storage::url($l->url)}}"  width="130" height="90" class="d-inline-block align-top img-fluid btn btn-outline-light rounded" style="border: 0;"></a>
            @endif
        @endforeach
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-2 {{request()->is('/')? 'active':'' }}">
          <a class="nav-link" href="{{route('index')}}">Inicio</a>
        </li>
        <li class="nav-item mx-2 {{request()->is('Nosotros')? 'active':'' }}">
          <a class="nav-link" href="{{route('nosotros')}}">Nosotros</a>
        </li>
        <li class="nav-item dropdown mx-2">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Información al usuario
          </a>
          <div class="dropdown-menu shadow fade dropdown-menu-right" aria-labelledby="navbarDropdown">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{route('pqrs')}}" role="button" class="btn btn-light"><img src="image/6.png" width="40" height="30"  alt="Pqrs">PQRS</a>
                <a href="{{route('dd')}}" role="button" class="btn btn-light"><img src="image/5.png"  width="40" height="30" alt="Derechos">  Derechos y deberes</a>
                <a href="{{route('ConInf')}}" role="button" class="btn btn-light"><img src="image/7.png" width="40" height="30" alt="Consentimientos"> Consentimientos informados</a>
                <a href="{{route('PrDG')}}" role="button" class="btn btn-light"><img src="image/8.png" width="40" height="30" alt="Preparaciones"> Preparaciónes para examenes diagnosticos</a>
              </div>
          </div>
        </li>
        <li class="nav-item dropdown mx-4">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Más
            </a>
            <div class="dropdown-menu shadow fade dropdown-menu-right" aria-labelledby="navbarDropdown">
              <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{route('galeria')}}" role="button" class="btn btn-light"><img src="image/9.png" width="40" height="30" alt="Aliados"> Nuestros Aliados</a>
                  <a href="{{route('covid')}}" role="button" class="btn btn-light"><img src="image/10.png"  width="40" height="30" alt="Covid-19"> Covid-19</a>
                  <a href="{{route('faq')}}" role="button" class="btn btn-light"><img src="image/11.png"    width="40" height="30" alt="Preguntas frecuentes"> Preguntas frecuentes</a>
                  <a href="{{route('TrabNos')}}" role="button" class="btn btn-light"><img src="image/12.png"width="40" height="30" alt="Trabaje con nosostros"> Trabaja con nosotros</a>
                  <a href="{{route('finan')}}" role="button" class="btn btn-light"><img src="image/13.png"  width="40" height="30" alt="Estados financieros">Estados financieros</a>
                </div>
            </div>
          </li>
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{route('cita')}}" type="button" class="btn btn-light {{request()->is('Cita')? 'text-info':'' }}"><i class="fas fa-calendar-alt"></i> Cita</a>
            <a type="button" class="btn btn-light" data-toggle="modal" data-target="#encuesta">
                <i class="fas fa-search-plus"></i> Resultados Examenes</a>
          </div>
          <a  href="{{route('search')}}" class="btn btn-light mx-4  {{request()->is('Buscar')? 'text-info':'' }}"><i class="fas fa-search"></i>Buscar</a>
      </ul>
    </div>
  </nav>
@include('layouts.modalencuesta')
