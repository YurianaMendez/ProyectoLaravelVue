@extends('admin.layout')

@section('header')
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Crear un Nuevo Post</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="">Inicio</a></li>
            <li class="breadcrumb-item active">Create</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@stop

@section('content')
<div class="card card-danger">
<form action="{{route('admin.posts.storage')}}" method="POST">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-8">        
            <div class="card-body">         
                <div class="form-group">
                    <label for="">Titulo de la Publicación</label>
                    <input   name="title" type="text" class="form-control" placeholder="Ingresa Aqui el titulo de la publicacion">
                </div>
                <div class="form-group">
                    <label for="">Contenido de la Publicación</label>
                    <textarea name="body" id="editor" class="form-control" id="" cols="30" rows="10" placeholder="Ingresa un contenido de la publicacion"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Fecha de Publicación</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="date" name="published_at" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                    </div>
                    <!-- /.input group -->
                </div>  
                <div class="form-group">
                    <label for="">Categoria</label>
                    <select name="categoria" class="form-control">
                        <option value="">Seleccione una categoria</option>
                        @foreach ( $categorias as $categoria )
                    <option value="{{ $categoria->id}}">{{ $categoria->name}}</option>                            
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Etiquetas</label>
                        <select name="tags{}" class="select2" 
                            multiple="multiple" 
                            data-placeholder="Selecciona una o mas etiquetas" style="width: 100%;">
                        @foreach ($tags as $tag )
                            <option value="{{ $tag->id}}">{{$tag->name}}</option>
                        @endforeach
                        </select>

                  </div>
                <div class="form-group">
                    <label for="">Extracto de la Publicación</label>
                    <textarea name="excerpt" class="form-control" id="" placeholder="Ingresa un extracto de la publicacion"></textarea>
                </div>
                <div class="form-group">
                    <button  type="submit" class="btn btn-primary btn-block">Guardar Publicación</button> 
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- /.card-body -->
  </div>
@endsection

<script>
$(function () {
    $('.select2').select2()

    CKEDITOR.replace('editor');
})
   
</script>