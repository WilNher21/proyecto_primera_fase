@extends('plantillas.plantilla')

@section('titulo', 'Estudiantes de la Escuela Republica de Tangamandapio')

@section('contenido')

@if (session('mensaje'))
  <div class = "alert alert-success">
    {{session('mensaje')}}
  </div>
@endif

<h1>Estudiantes  de la Escuela Republica de Tangamandapio <a  class="btn btn-primary" href="{{route('estudiante.crear')}}">Nuevo</a></h1>

    <table class="table caption-top">
      
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre del Alumno</th>
          <th scope="col">Identidad</th>
          <th scope="col">Promedio</th>
          <th scope="col">Direccion</th>
          <th scope="col">Id del Grado</th>

          <th scope="col">Ver Estuidante</th>
        </tr>
      </thead>
      <tbody>
          @forelse($estudiantes as $estudiante)
            <tr>
                <td scope="row">{{ $estudiante->id }}</td>
                <td>{{ $estudiante->nombreAlumno}} {{$estudiante->apellidoAlumno}}</td>
                <td>{{ $estudiante->identidad}}</td>
                <td>{{$estudiante->Promedio}}</td>
                <td>{{$estudiante->direccion}}</td>
                <td>{{$estudiante->grado_id}}</td>
                <td><a   class="btn btn-info" href="{{route('estudiante.ver', ['id'=>$estudiante->id])}}">Inspeccionar</a></td>
                
                
            </tr>
          @empty
            <tr>
                <td colspan = "4">No hay estudiante</td>
            </tr>

          @endforelse
      </tbody>
    </table>

    {{ $estudiantes -> links() }}


@endsection