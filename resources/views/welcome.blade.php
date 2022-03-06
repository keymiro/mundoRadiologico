<!--###################################--><!-- Menu General -->
@extends('layouts.nav')
@section('content')
<!--###################################-->
 <!-- ======= Top Bar ======= -->
 @include('layouts.topbar')
<!--###################################-->
<!-- Menu de servicios -->
@include('layouts.menugeneral')
<!--###################################-->
<!-- Imaage -->
<div>
@include('layouts.imgp')
</div>
<div class="parpadea" id="TexCita">
    <a class="nav-link" href="" id="texci"  data-bs-toggle="modal" data-bs-target="#encuesta">
      <h1 class="">Resultado Examenes</h1>
      <img src="image/17.png" alt="Consulta tu resultado" id="Cita" >
    </a>
</div>
<!--###################################-->
<!-- Map -->
<div class="container" id="map">
  <a href="https://www.google.com/maps/place/Mundo+radiologico/@5.346449,-72.395959,18z/data=!4m5!3m4!1s0x0:0x2b3d9685eb29917c!8m2!3d5.3464486!4d-72.3959594?hl=es">
    <img src="image/18.png" alt="Map" id="map">
  </a>
</div>
<!-- Datos de Inf -->
<div id="DatosInf">
  <a class="nav-link" id="DatInf" href="{{route('DatosInt')}}">@include('layouts.daint')</a>
</div>
  <!-- ======= Footer ======= -->
  <div id="Footer">
  @include('layouts.footer')
  </div>
  <!--###################################-->
  <!-- ModalPrincipal -->
  @include('layouts.prom')
<!--###################################-->
@endsection
