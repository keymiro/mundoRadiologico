@extends('template')
@section('content')
<h2 class="text-center">Resultado</h2>
        @forelse ($info as $i )
            <div class="card shadow rounded my-4">
                <div class="card-header">
                    {{$i->title}}
                </div>
                <div class="card-body">
                    {{$i->description}}
                    {!!$i->descriptionck!!}
                </div>
            </div>
        @empty
            <h2>No hay coincidencias </h2>
    @endforelse
@endsection
