@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark">
                <div class="card-header">{{ __('Nueva sección') }}</div>
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{route('info.home')}}" class="btn btn-primary">Listado de Secciones</a>
                    </div>
                <form action="{{route('info.update',$info->id)}}"  method="POST" enctype="multipart/form-data">
                        @csrf @method('PATCH')
                    <div class="mb-3">
                        <label for="title">Titulo</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Título" required value="{{$info->title}}">
                      </div>
                    <div class="mb-3">
                        <label for="">Categoría</label>
                        <select class="form-select form-control" aria-label="Default select example" name="category" required>
                            <option selected value="{{$info->category->id}}">{{$info->category->title}}</option>
                                @foreach ($categories as $c )
                                    <option value="{{$c->id}}">{{$c->title}}</option>
                                @endforeach
                          </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Imagen</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" name="file"class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" value="{{$info->url}}">
                          <label class="custom-file-label" for="inputGroupFile01">{{$info->url}}</label>
                        </div>
                      </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="description" rows="3" placeholder="Descripción" name="description">{{$info->description}}
                        </textarea>
                    </div>
                    <div class="mb3">
                        <a class="btn btn-primary mr-2" data-toggle="collapse" href="#multiCollapseExample1" role="button">Más</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <hr>
                           <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor">{{$info->descriptionck}}
                           </textarea>
                    </div>
                </div>
               </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
   CKEDITOR.replace( 'summary-ckeditor', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
    });
</script>
@endsection
