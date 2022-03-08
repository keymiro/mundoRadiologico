<nav class="navbar navbar-light align-items-start bg-light">
    <div class="row ml-auto">
        <a class="text-dark mx-4" href="#">Ingresar  <i class="fas fa-sign-in-alt"></i></a>
        <a class="text-dark mx-4" href="#"><i class="fab fa-instagram"></i></a>
        <a class="text-dark mx-4" href="#"><i class="fab fa-facebook"></i></a>
        <a class="text-dark mx-4" href="#"><i class="fab fa-youtube"></i></a>
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
        <li class="nav-item active mx-2">
          <a class="nav-link" href="#">Inicio</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Nosotros</a>
        </li>
        <li class="nav-item dropdown mx-2">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Información al usuario
          </a>
          <div class="dropdown-menu shadow fade dropdown-menu-right" aria-labelledby="navbarDropdown">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a role="button" class="btn btn-light">Left</a>
                <a role="button" class="btn btn-light">Middle</a>
                <a role="button" class="btn btn-light">Right</a>
                <a role="button" class="btn btn-light">Middle</a>
              </div>
          </div>
        </li>
        <li class="nav-item dropdown mx-4">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Más
            </a>
            <div class="dropdown-menu shadow fade dropdown-menu-right" aria-labelledby="navbarDropdown">
              <div class="btn-group" role="group" aria-label="Basic example">
                  <a role="button" class="btn btn-light">Left</a>
                  <a role="button" class="btn btn-light">Middle</a>
                  <a role="button" class="btn btn-light">Middle</a>
                  <a role="button" class="btn btn-light">Middle</a>
                  <a role="button" class="btn btn-light">Right</a>
                </div>
            </div>
          </li>
          <div class="btn-group" role="group" aria-label="Basic example">
            <a type="button" class="btn btn-light"><i class="fas fa-calendar-alt"></i> Cita</a>
            <a type="button" class="btn btn-light"><i class="fas fa-search-plus"></i> Resultados Examenes</a>
          </div>
      </ul>
      <form class="form-inline my-2 my-lg-0 mx-2">
        <button class="btn btn-light my-2 my-sm-0" type="submit"><i class="fas fa-search"></i> Search</button>
      </form>
    </div>
  </nav>
