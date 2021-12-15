@extends('layouts.nav')

@section('content')
 <!-- ======= Top Bar ======= -->
 @include('layouts.topbar')
</br></br></br></br>
  <main id="main">
          <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            @if(session('notification'))
            <div class="sent-message">
                <strong> <i class="fas fa-check-circle"></i> {{ session('notification') }}</strong>
            </div>
        @endif
          <div class="section-title">
            <h2>Contacto</h2>
            <p>Horario de Atención:
              Lunes a Jueves 7 a.m - 12:00 p.m y de
              2:00 p.m - 5:45 p.m, Viernes 8:00 a.m a 12:00 p.m y de 2:00 p.m a 5:45 p.m
              y Sábado 8:00 a.m - 12:00 p.m</p>
          </div>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.4605328945822!2d-72.39814808573604!3d5.34645393720955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6b0c4c745c55fd%3A0x2b3d9685eb29917c!2sMundo%20radiologico!5e0!3m2!1ses-419!2sbg!4v1637863816683!5m2!1ses-419!2sbg" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container">
          <div class="row mt-5">

            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Ubicación:</h4>
                  <p>Carrera 23 # 12-43 Edificio Medicenter - 2do Piso - Yopal Casanare</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>Mundoradiologico@gmail.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Movil:</h4>
                  <p>Teléfono: (8) 633 3216 - Móvil: 322 400 5120</p>
                </div>

              </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->
  </main>
 @include('layouts.footer')

@endsection
