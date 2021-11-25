@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark">
                <div class="card-header">{{ __('Listado de categorias') }}</div>

                <div class="card-body">
                    <a href="{{route('info.createCategory')}}" class="btn btn-primary">Nueva categoría</a>

                    <div class="my-4">
                        <table class="table table-striped table-dark table-responsive-sm table-sm">
                            <thead>
                              <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $c)
                              <tr>
                                <td>{{$c->title}}</td>
                                <td>{{$c->description}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{route('info.editCategory',$c->id)}}" type="button" class="btn btn-secondary">Editar</a>
                                        <form   action="{{route('info.deleteCategory',$c->id)}}"
                                            method="post">
                                        @csrf @method('DELETE')
                                        <button  class="btn btn-danger" onclick="return confirm('Estás seguro que desea eliminar el registro?');">
                                           Eliminar
                                        </button>
                                    </form>
                                      </div>
                                </td>
                              </tr>
                            @endforeach
                            </tbody>
                          </table>
                          {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
