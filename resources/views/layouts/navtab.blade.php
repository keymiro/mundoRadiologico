@php
  $e=1;
  $f=1;
@endphp
<div class="container py-4">
    <div class="row">
        <div class="col-md-3">
    <!-- Tabs nav -->
            <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @foreach ($info as $mg)
                    @if($mg->category->title=='services')
                        @if($f==1)
                        <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#a{{$mg->id}}" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <span class="font-weight-bold small text-uppercase">{{$mg->title}}</span>
                        </a>
                        @endif
                        @if($f>1)
                        <a class="nav-link mb-3 p-3 shadow " id="v-pills-home-tab" data-toggle="pill" href="#a{{$mg->id}}" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <span class="font-weight-bold small text-uppercase">{{$mg->title}}</span>
                        </a>
                        @endif
                        @php
                            $f=$mg->id;
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-md-9">
    <!-- Tabs content -->
            <div class="tab-content" id="v-pills-tabContent">
                @foreach ($info as $mgs)
                    @if($mgs->category->title=='services')
                        @if($e==1)
                            <div class="tab-pane fade shadow rounded bg-white show active p-5" id="a{{$mgs->id}}" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <h4 class="font-italic mb-4">{{$mgs->title}}</h4>
                                <p class="font-italic text-muted mb-2">{!!$mgs->descriptionck!!}</p>
                            </div>
                        @endif
                        @if($e>1)
                            <div class="tab-pane fade shadow rounded bg-white p-5" id="a{{$mgs->id}}" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <h4 class="font-italic mb-4">{{$mgs->title}}</h4>
                                <p class="font-italic text-muted mb-2">{!!$mgs->descriptionck!!}</p>
                            </div>
                        @endif
                        @php
                            $e=$mg->id;
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

