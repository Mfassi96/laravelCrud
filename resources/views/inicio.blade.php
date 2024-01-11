@extends('layout/plantilla');

@section('tituloPagina','Laravel Crud ')

@section('contenido')
<div class="card">
  <div class="card-header">
    Crud con Laravel y Mysql
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col">
        @if($mensaje=Session::get('success'))
        <div class="alert alert-success" role="alert">
          {{$mensaje}} <i class="fa-solid fa-circle-check"></i>
        </div>
        @endif();
      </div>
    </div>
    <h5 class="card-title">Listado de personas</h5>
    <div class="btn-group my-2">
        <a href="{{route('personas.create')}}" class="btn btn-primary">Crear personas <i class="fa-solid fa-user-plus"></i></a>
      </div>
      <p class="card-text">
        <table class="table-responsive table table-sm table-bordered">
            <thead>
                <th>Nombre</th>
                <th>Apellido pateno</th>
                <th>Apellido Materno</th>
                <th>Fecha de Nacimiento</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
              @foreach ($datos as $item) 
              <tr>
                <td>{{$item->nombre}}</td>
                <td>{{$item->apellido_paterno}}</td>
                <td>{{$item->apellido_materno}}</td>
                <td>{{$item->fecha_nacimiento}}</td>
                <td><a href="{{route('personas.edit',$item->id)}}"><i class="fa-solid fa-user-pen btn btn-warning"></i></a></td>
                <td><a href="{{route('personas.show',$item->id)}}"><i class="fa-solid fa-delete-left btn btn-danger"></i></a></td>
              </tr>   
              @endforeach
            </tbody>
        </table>
      </p>
      
    </div>
  </div>

@endsection