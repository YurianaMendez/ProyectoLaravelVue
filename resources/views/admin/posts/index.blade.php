
@extends('admin.layout')

@section('header')
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Todas las Publicaciones</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="">Inicio</a></li>
            <li class="breadcrumb-item active">Posts</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@stop

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="posts-table" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Titulo</th>
          <th>Extracto</th>
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id}}</td>
                    <td>{{ $post->title}}</td>
                    <td>{{ $post->excerpt}}</td>
                    <td>
                        <a href="" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                        <a href="" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>                
            @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@stop