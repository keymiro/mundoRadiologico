@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="{{route('info.home')}}" class="btn btn-primary">Listado de secciónes</a>
                    <a href="{{route('info.indexCategory')}}" class="btn btn-primary">Listado de categoría</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
