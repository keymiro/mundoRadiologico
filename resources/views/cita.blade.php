@extends('layouts.nav')

@section('content')
 <!-- ======= Top Bar ======= -->
 @include('layouts.topbar')
</br></br></br></br>
  <main id="main">
 <!-- ======= Appointment Section ======= -->
 <section id="appointment" class="appointment section-bg">
    <div class="container">
        @if(session('notification'))
        <div class="sent-message">
            <strong> <i class="fas fa-check-circle"></i> {{ session('notification') }}</strong>
        </div>
    @endif
      <div class="section-title">
        <h2>Aparta una cita</h2>
      </div>

      <form action="{{route('citaSend')}}" method="post" enctype="multipart/form-data">
        @csrf <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre completo" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Movil" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="document" class="form-control" id="document" placeholder="Documento de identidad" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="city" id="city" placeholder="Ciudad" data-rule="date" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="direction" id="direction" placeholder="Dirección" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <input type="text" name="date" class="form-control" id="date" placeholder="Fecha de la cíta" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="workingday" id="workingday" class="form-select">
              <option value="">Jornada</option>
              <option value="Mañana">Mañana</option>
              <option value="Tarde">Tarde</option>

            </select>
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3">
              <label for="datehb">Fecha de nacimiento</label>
              <input type="date" class="form-control" name="datehb" id="datehb" placeholder="fecha de nacimiento" data-rule="date" data-msg="Please enter a valid email">
              <div class="validate"></div>
          </div>
        </div>

        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Digite el procedimiento tal como aparece en su orden y/o autorización medica"></textarea>
          <div class="validate"></div>
        </div>
        <div class="form-group mt-3">
            <label for="file" class="form-control">Adjuntar orden Medica/Autorización EPS/Historia Clínica: </label>
          <input type="file" class="form-control" name="file" id="file">
          <div class="validate"></div>
        </div>
        <div class="mb-3">
          <div class="error-message"></div>
          @if(session('notification'))
                            <div class="sent-message">
                                <strong> <i class="fas fa-check-circle"></i> {{ session('notification') }}</strong>
                            </div>
          @endif
        </div>
        <div class="text-center"><button type="submit" class="btn btn-primary">Apartar cita</button></div>
      </form>

    </div>
  </section><!-- End Appointment Section -->
  </main>
 @include('layouts.footer')

@endsection
