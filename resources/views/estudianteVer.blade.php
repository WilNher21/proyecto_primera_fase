@extends('plantillas.plantilla')

@section('titulo', 'Detalle del Estudiante ')

@section('contenido')
<table class="table">
    <h1>Detalles del Estudainte: {{$estudiante->nombreAlumno}} {{$estudiante->apellidoAlumno}}</h1>
  <thead>
    <tr>
      <th scope="col">Detalle</th>
      <th scope="col">Valores</th>
      <td><a  class="btn btn-warning" href="{{route('estudiante.edit', ['id'=>$estudiante->id])}}">Editar Estudiante:{{$estudiante->id}}</a></td>
      <td>
          <form action="{{route('estudiante.eliminar', ['id'=>$estudiante->id])}}" method="POST" style="display: inline-black;" onsubmit="return confirm('Estas seguro de eliminar el registro?')" >
            @method('delete')
            @csrf
            <input type="submit" class="btn btn-danger" value="Eliminar">   
        </form> 
        </td>
    </tr>
    
        </thead>
         <tbody>
            <tr>
                <th cope="row">Nombre</th>
                <td>{{ $estudiante->nombreAlumno}}</td>
            </tr>

            <tr>
                <th scope="row">Apellido</th>
                <td>{{$estudiante->apellidoAlumno}}</td>
            </tr>

            <tr>
                <th scope="row">Identidad</th>
                <td>{{$estudiante->identidad}}</td>
            </tr>


            <tr>
                <th scope="row">Promedio</th>
                <td>{{$estudiante->Promedio}}</td>
            </tr>

            <tr>
                <th scope="row">Direccion</th>
                <td>{{$estudiante->direccion}}</td>
            </tr>

            <tr>
                <th scope="row">Grado</th>
                <td>{{$estudiante->grado_id}}</td>
            </tr>

  </tbody>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</table>




@endsection