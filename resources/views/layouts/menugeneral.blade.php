<!-- Menu de servicios-->
@php
  $e=1;
  $f=1;
@endphp
<div  class="container" id="navge">
    <div class="d-flex align-items-start" id="navgea">
        <div class="nav flex-column  me-3" id="v-pills-tab">
            <ul>
                @foreach ($info as $mg)
                @if($mg->category->title=='services')
                    @if($f==1)
                        <li><button class=""><li class="flech"></li><h1>{{$mg->title}}</h1></button>
                        <div class="tab-content" id="One" style="visibility: visible;">    
                            <h1> {{$mg->title}}</h1> 
                            <p>{!!$mg->descriptionck!!}</p> 
                        </div>
                        </li>
                    @endif
                    @if($f>1)
                        <li><button class=""><li class="flech"></li><h1>{{$mg->title}}</h1></button>
                        <div class="tab-content">    
                            <h1> {{$mg->title}}</h1> 
                            <p>{!!$mg->descriptionck!!}</p> 
                        </div>
                        </li>
                    @endif
                    @php
                        $f=$mg->id;
                    @endphp
                @endif
                @endforeach
            </ul>
    </div>
    </div>
</div>