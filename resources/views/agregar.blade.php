@extends('layout/plantilla');

@section('tituloPagina','Crear Persona');

@section('contenido')

<div class="card">
    <div class="card-header card-title">
      Agregar persona
    </div>
    <div class="card-body">
      <a href="{{route('personas.index')}}" class="btn btn-secondary"><i class="fa-solid fa-circle-chevron-left mx-2"></i>Regresar a la vista</a>
      <p class="card-text">
        <form action="#">
            <label for="nombre" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" placeholder="Nombre" required class="form-control">

            <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
            <input id="apellido_paterno" name="apellido_paterno" type="text" placeholder="Apellido Paterno" required class="form-control">

            <label for="apellido_materno" class="form-label">Apellido Materno</label>
            <input id="apellido_materno" name="apellido_materno" type="text" placeholder="Apellido Materno" required class="form-control">

            <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
            <input id="apellido_paterno" name="apellido_paterno" type="text" placeholder="Apellido Paterno" required class="form-control">

            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
            <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" required class="form-control">

            <div class=" btn-gruop">
                <button class="btn btn-primary">Agregar <i class="fa-solid fa-user-plus"></i></button>
            </div>
        </form>
        </p>
    </div>
  </div>

@endsection

