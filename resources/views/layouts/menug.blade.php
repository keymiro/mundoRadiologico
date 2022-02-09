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