@extends('layouts.nav')

@section('content')
 <!-- ======= Top Bar ======= -->
 @include('layouts.topbar')
</br></br></br></br>
  <main id="main">
<section id="dd" class="testimonials">
    <div class="container">
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        @if(session('notification'))
                        <div class="sent-message">
                            <strong> <i class="fas fa-check-circle"></i> {{ session('notification') }}</strong>
                        </div>
                        @endif
                                <div class="section-title">
                                    <h2>PQRS</h2>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <form class="row g-3" method="POST" action="{{route('pqrSend')}}">
                                            @csrf
                                            <div class="col-md-6">
                                              <label for="name" class="form-label">Nombre completo</label>
                                              <input type="text" class="form-control" id="name" name="name">
                                            </div>
                                            <div class="col-md-6">
                                              <label for="doc" class="form-label">Documento de identidad</label>
                                              <input type="number" class="form-control" id="doc" name="document">
                                            </div>
                                            <div class="col-md-6">
                                              <label for="eps" class="form-label">EPS</label>
                                              <input type="text" class="form-control" id="eps" name="eps">
                                            </div>
                                            <div class="col-md-6">
                                              <label for="address" class="form-label">Dirección </label>
                                              <input type="text" class="form-control" id="address" name="address">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="email" class="form-label">Correo electrónico</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                              </div>
                                            <div class="col-md-6">
                                              <label for="pqrs" class="form-label">Seleccione la opción que corresponda</label>
                                              <select id="pqrs" class="form-select" name="pqrs">
                                                <option selected>Seleccione la opción que corresponda</option>
                                                <option  value="Queja"> Queja (Q)</option>
                                                <option value="Reclamo">Reclamo (R)</option>
                                                <option value="Sugerencia">Sugerencia (S)</option>
                                                <option value="Felicitacion">Felicitación (F)</option>
                                                <option value="Otro">Otro - Especifíquelo en el campo mensaje</option>
                                              </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="tel" class="form-label">Teléfono</label>
                                                <input type="number" name="phone" id="tel"  class="form-control"></input>
                                              </div>
                                            <div class="col-md-6">
                                                <label for="message" class="form-label">Mensaje</label>
                                                <textarea name="message" id="message"  class="form-control" placeholder="Por favor coloque a continuación su Queja, Reclamo, Sugerencia, Felicitación"></textarea>
                                              </div>
                                            <div class="col-12">
                                              <button type="submit" class="btn btn-primary">Enviar</button>
                                            </div>
                                          </form>
                                    </div>
                                </div>
                                @if(session('notification'))
                                          <div class="sent-message">
                                              <strong> <i class="fas fa-check-circle"></i> {{ session('notification') }}</strong>
                                          </div>
                                          @endif
                    </div>
                </div>
           </div>
        </div>
    </div>
</section><!-- End Testimonials Section -->
  </main>
 @include('layouts.footer')

@endsection

