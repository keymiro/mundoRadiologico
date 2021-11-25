@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark">
                <div class="card-header">{{ __('Listado de Secciones') }}</div>

                <div class="card-body">
                    <a href="{{route('info.create')}}" class="btn btn-primary">Nueva sección</a>

                    <div class="my-4">
                        <table class="table table-striped table-dark table-responsive-sm table-sm">
                            <thead>
                              <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Categoría</th>
                                <th scope="col">Creado por</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($info as $inf)
                              <tr>
                                <td>{{$inf->title}}</td>
                                <td>{{$inf->category->title}}</td>
                                <td>{{$inf->user->name}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{route('info.edit',$inf->id)}}" type="button" class="btn btn-secondary">Editar</a>
                                        <form   action="{{route('info.delete',$inf->id)}}"
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
                          {{ $info->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
