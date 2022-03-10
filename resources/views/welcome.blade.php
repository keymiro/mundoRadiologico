
@extends('template')
@section('content')
<div class="row">
    <div class="col-sm-7">
        @include('layouts.navtab')
    </div>
    <div class="col-sm-3 col-xl">
                @include('layouts.sliderone')
                <br>
                @include('layouts.slidertwo')
    </div>
    <div class="col-sm col-xl">
            @include('layouts.resultandmap')
    </div>
</div>
@include('layouts.prom')
@endsection
