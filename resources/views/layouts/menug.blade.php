<!-- Menu de servicios-->
@php
  $e=1;
  $f=1;
@endphp
<div class="container" id="navge" >
    <div class="d-flex align-items-start" id="navgea">
      <div class="nav flex-column  me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          @foreach ($info as $mg)
          @if($mg->category->title=='services')
          @if($e==1)
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><li class="flech"></li><h1>{{$mg->title}}</h1></button>
          @endif
          @if($e>1)
            <button class="dropdown" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v{{$mg->id}}" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><li class="flech"></li><h1>{{$mg->title}}</h1></button>
            @endif
            @php
              $e=$mg->id;
          @endphp
            @endif
          @endforeach
      </div>
      <!-- Informacion-->
      <div class="tab-content" id="v-pills-tabContent">
          @foreach ($info as $mg)
          @if($mg->category->title=='services')  
          @if($f==1)
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h1> {{$mg->title}}</h1> 
            <p>{!!$mg->descriptionck!!}</p> 
            </div>
            @endif
          @if($f>1)
            <div class="tab-pane fade" id="v{{$mg->id}}" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <h1> {{$mg->title}} </h1>    
            <p>{!!$mg->descriptionck!!}</p> 
            </div>
            @endif
            @php
              $f=$mg->id;
          @endphp
            @endif
          @endforeach
      </div>
    </div>
</div>