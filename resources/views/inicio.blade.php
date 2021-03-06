@extends('plantillas.plantilla')

@section('contenido')
<h1>Escuela Republica de Tangamandapio </h1>

<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Seleccione la opcion a la cual desee ingresar:</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg>
        </div>
        <h2>Grados</h2><a href="#" class="icon-link">
         Haga click Aqui Para Ver los
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
        </div>
        <h2>Maestros </h2><a href="#" class="icon-link">
        Haga click Aqui  Para Ver los
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
        </div>
        <h2>Estudiantes</h2><a href="{{route('estudiante.index')}}" class="icon-link">
        Haga click Aqui  Para Ver los
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
    </div>
  </div>
@endsection