@extends('layout/plantilla');

@section('tituloPagina','Eliminar Persona');

@section('contenido')

<div class="card">
    <div class="card-header card-title">
      Eliminar Persona
    </div>
    <div class="card-body">
      <a href="{{route('personas.index')}}" class="btn btn-secondary"><i class="fa-solid fa-circle-chevron-left mx-2"></i>Regresar a la vista</a>
      <p class="card-text">
        <div class="alert alert-danger" role="alert">
            <h2>¿Estas seguro de eliminar esta persona?</h2>
            
            <div class="table-responsive">
              <table
                  class="table"
              >
                  <thead>
                      <tr>
                          <th scope="col">NOMBRE</th>
                          <th scope="col">APELLIDO PATERNO</th>
                          <th scope="col">APELLIDO MATERNO</th>
                          <th scope="col">FECHA DE NACIMIENTO</th>
                          <th scope="col">CREADO</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>{{$persona->nombre}}</td>
                          <td>{{$persona->apellido_paterno}}</td>
                          <td>{{$persona->apellido_materno}}</td>
                          <td>{{$persona->fecha_nacimiento}}</td>
                          <td>{{$persona->created_at}}</td>
                      </tr>
                  </tbody>
              </table>
              <form action="{{route('personas.destroy',$persona->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <button class="btn btn-outline-danger btn-block btn-lg">ELIMINAR<i class="fa-solid fa-trash-can mx-2" style="color: #2d4267;"></i></button>
              </form>
              
            </div>
          </div

          
        </p>
    </div>
  </div>

@endsection

