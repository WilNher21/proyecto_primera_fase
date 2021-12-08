<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function index(){
        $estudiantes = Estudiante ::paginate(15);
        return view('Estudiantes')->with(compact('estudiantes'));
    }

    public function ver($id){
        $estudiante= Estudiante ::findOrFail($id);
        return view('estudianteVer')->with(compact('estudiante'));
    }

    public function edit($id){

        $estudiante = Estudiante::findOrFail($id);
        return view('estudianteEditar')->with(compact('estudiante'));

    }

    public function actualizar(Request $request, $id){

        $request->validate([
            'nombre'=>'required|alpha',
            'apellido'=>'required|alpha',
            'ident'=>'required',
            'promedio'=>'required|numeric|min:0|max:100',
            'dire'=>'required',
            'id'=>'required|numeric'
        ]);

        $estudiante = Estudiante::findOrFail($id);
              
        $estudiante->nombreAlumno = $request->input('nombre');
        $estudiante->apellidoAlumno = $request->input('apellido');
        $estudiante->identidad = $request->input('ident');
        $estudiante->Promedio = $request->input('promedio');
        $estudiante->direccion = $request->input('dire');
        $estudiante->grado_id = $request->input('id');   

        $creado = $estudiante->save();

        if($creado){
            return redirect()->route('estudiante.index')
            ->with('mensaje','El estudiante fue editado Exitosamente.');
        }
        else{
            
        }

    }

    public function create(){
        return view('estudiantenuevo');

    }

    public function store(Request $request){
        //validar
        

        $request->validate([
        'nombre'=>'required|alpha',
        'apellido'=>'required|alpha',
        'ident'=>'required|unique:estudiantes,identidad',
        'promedio'=>'required|numeric|min:0|max:100',
        'dire'=>'required',
        'id'=>'required|numeric'
            
        ]);

        $nuevoEstudiante = new Estudiante();

        $nuevoEstudiante->nombreAlumno = $request->input('nombre');
        $nuevoEstudiante->apellidoAlumno = $request->input('apellido');
        $nuevoEstudiante->identidad = $request->input('ident');
        $nuevoEstudiante->Promedio = $request->input('promedio');
        $nuevoEstudiante->direccion = $request->input('dire');
        $nuevoEstudiante->grado_id = $request->input('id'); 
        

        $creado =$nuevoEstudiante->save();

        if($creado){
            return redirect()->route('estudiante.index')
            ->with('mensaje','El estudiante fue creado correctamente.');
        }
        else{
            
        }
    }

    public function destroy($id){
        
        Estudiante::destroy($id);
        
        //redirigir 
        return redirect('/estudiantes/')
        ->with('mensaje','estudiante borrado completamente');
    }

}
