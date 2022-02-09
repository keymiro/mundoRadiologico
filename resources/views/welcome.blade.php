<!-- Menu General -->
@extends('layouts.nav')
@section('content')
 <!-- ======= Top Bar ======= -->
  @include('layouts.topbar')
<!-- ModalPrincipal -->
  @include('layouts.prom')
<!-- carousel Princiapl -->
<section>
  @include('layouts.carouselp')
</section>
<!-- Menu de servicios -->
  @include('layouts.menug')
<!-- Menu cubo-->
<div class="container-flex" id="Cont">
<nav class="nav justify-content-center align-items-center" id="contNav">
@include('layouts.imgp')
  <a class="nav-link" href="{{route('DatosInt')}}">@include('layouts.Daint')</a>
  <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#encuesta"><h1 class=""><img src="image/1.png" alt="Consulta tu resultado" id="Cita" class="flex">Resultado Examenes</h1></a>
</nav>
</div>
<div class="container">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.4605328945822!2d-72.39814808573604!3d5.34645393720955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6b0c4c745c55fd%3A0x2b3d9685eb29917c!2sMundo%20radiologico!5e0!3m2!1ses-419!2sbg!4v1637863816683!5m2!1ses-419!2sbg" frameborder="0" allowfullscreen></iframe>
        </div>
<!-- End .content-->
    </section><!-- End Why Us Section -->
  </main><!-- End #main -->
  @include('layouts.footer')
  <!-- ======= Footer ======= -->
@endsection



