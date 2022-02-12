<!-- Menu General -->
@extends('layouts.nav')
@section('content')
 <!-- ======= Top Bar ======= -->
  @include('layouts.topbar')


<!--###################################--><!-- carousel Princiapl -->
<div class="container-fluid">
    @php
      $re=1;
      $ree=0;
      $er=1;
    @endphp
      <!-- Inicio de Carrusel-->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
  @foreach ($info as $tt)
  @if($tt->category->title=='slider')
  @if($re==1)
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$ree}}" class="active" aria-current="true" aria-label=""></button>
  @endif
  @if($re>1)
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$ree}}" aria-label=""></button>
  @endif
  @php
    $ree=$ree+1;
  @endphp
  @php
    $re=2;
  @endphp
  @endif
  @endforeach
  </div>
  <div class="carousel-inner">
  <!--Image-->
    @foreach ($info as $ter)
    @if($ter->category->title=='slider')
    @if($er==1)
    <div class="carousel-item active">
      <img src="{{Storage::url($ter->url)}}" class="d-block w-100" alt="Dato1">
    </div>
    @endif
    @if($er>1)
    <div class="carousel-item">
      <img src="{{Storage::url($ter->url)}}" class="d-block w-100" alt="Dato2">
    </div>
    @endif
    @php
      $er=2;
    @endphp
    @endif
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      <!-- Fin de Carrusel-->
    </div>
<!--###################################-->
<!--###################################--><!-- Menu de servicios -->
<!-- Menu de servicios-->
@php
  $e=1;
  $f=1;
@endphp
<div class="container" id="navge" >
<div class="d-flex align-items-start" id="navgea">
  <div class="nav flex-column  me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  @foreach ($info as $Mg)
  @if($Mg->category->title=='services')
  @if($e==1)
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><li class="flech"></li>{{$Mg->title}}</button>
  @endif
  @if($e>1)
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v{{$Mg->id}}" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><li class="flech"></li>{{$Mg->title}}</button>
    @endif
    @php
      $e=$Mg->id;
  @endphp
    @endif
  @endforeach
  </div>
  <!-- Informacion-->
  <div class="tab-content" id="v-pills-tabContent">
  @foreach ($info as $Mg)
  @if($Mg->category->title=='services')  
  @if($f==1)
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <h1> {{$Mg->title}}</h1> 
    <p>{!!$Mg->descriptionck!!}</p> 
    </div>
    @endif
  @if($f>1)
    <div class="tab-pane fade" id="v{{$Mg->id}}" role="tabpanel" aria-labelledby="v-pills-profile-tab">
    <h1> {{$Mg->title}} </h1>    
    <p>{!!$Mg->descriptionck!!}</p> 
    </div>
    @endif
    @php
      $f=$Mg->id;
  @endphp
    @endif
  @endforeach
  </div>
</div>
</div>
<!--###################################-->
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
  <!-- ModalPrincipal -->
  @include('layouts.prom')
@endsection



