@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark">
                <div class="card-header">{{ __('Nueva categoría') }}</div>

                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{route('info.indexCategory')}}" class="btn btn-primary">Listado de categorias</a>
                    </div>
                    <form action="{{route('info.storeCategory')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Título">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descripcción</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descripción"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
