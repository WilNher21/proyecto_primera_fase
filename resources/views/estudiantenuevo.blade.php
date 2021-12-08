@extends('plantillas.plantilla')

@section('titulo','Formulario')

@section ('contenido')

    

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Creando un Nuevo Estudainte</h1>

    <form method="post" action="">
        @csrf
        <div class="form-group">

            <label for="nombre">Nombre del Alumno</label>
            <input type="text" class="form-control" name ="nombre" id ="nombre"
             placeholder="Nombre del estudiante">
        </div>

        <div class="form-group">
            <label for="apellido">Apellido del Estudiante</label>
            <input type="text" class="form-control" name ="apellido" id="apellido"
             placeholder="Apellido del estudiante" >
        </div>

        <div class="form-group">
            <label for="ident">Identidad del Estudiante</label>
            <input type="text" class="form-control" name ="ident" id="ident"
             placeholder="0000-0000-00000">
        </div>

        <div class="form-group">
            <label for="promedio">Promedio del Estudiante</label>
            <input type="Number" class="form-control" name ="promedio" id="promedio"
             placeholder="0-100">
        </div>

        <div class="form-group">
            <label for="dire">Direccion</label>
            <input type="text" class="form-control" name ="dire" id="dire"
             placeholder="Direccion de Domicilio" >
        </div>

        <div class="form-group">
            <label for="id">id del grado</label>
            <input type="number" class="form-control" name ="id" id="id"
             placeholder="1, 0,....">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">
        <a class ="btn btn-primary" href="{{route('estudiante.index')}}">Volver</a>



    </form>



@endsection