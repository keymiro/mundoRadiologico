
@extends('template')
@section('content')
<div class="row">
    <div class="col-sm-7">
        @include('layouts.navtab')
    </div>
    <div class="col-sm-3">
        <div class="row">


                @include('layouts.sliderone')
                </div>
                <br>
                <div class="row">
                @include('layouts.slidertwo')
                </div>
    </div>
    <div class="col">
            @include('layouts.resultandmap')
    </div>
</div>
@include('layouts.prom')
@endsection
