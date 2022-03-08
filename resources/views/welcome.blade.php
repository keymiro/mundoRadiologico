
@extends('template')
@section('content')
<div class="row">
    <div class="col-sm-7 my-4">
        @include('layouts.navtab')
    </div>
    <div class="col-sm-3">
                @include('layouts.sliderone')
                <br>
                @include('layouts.slidertwo')
    </div>
    <div class="col">
            @include('layouts.resultandmap')
    </div>
</div>
@endsection
