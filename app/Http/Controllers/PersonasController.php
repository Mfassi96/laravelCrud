<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
 
    public function index()
    {
        //pagina de inicio
        $datos=Personas::all();
        return view('inicio',compact('datos')); 
    }


    public function create()
    {
        // vista del formulario para agregar personas
        return view('agregar');
    }

   
    public function store(Request $request)
    {
        // guardar datos en la BD
        $personas= new Personas();
        $personas->nombre=$request->post('nombre');
        $personas->apellido_paterno=$request->post('apellido_paterno');
        $personas->apellido_materno=$request->post('apellido_materno');
        $personas->fecha_nacimiento=$request->post('fecha_nacimiento');
        $personas->save(); //guarda el registro en la BD

        return redirect()->route('personas.index')->with('success','Persona agregada con exito ');
    }


    public function show($id)
    {
        // Obtener solo 1 registro
        $persona=Personas::find($id);
        return view('eliminar',compact('persona'));
    }

    public function edit($id)
    {
        // metodo para traer datos para editar y se los coloca en una vista de form
        
        $persona=Personas::find($id);
        return view('actualizar',compact('persona'));
        
    }

   
    public function update(Request $request, $id)
    {
        // este metodo actualiza los datos en la BD
        $persona=Personas::find($id); 
        $personas= new Personas();
        $personas->nombre=$request->post('nombre');
        $personas->apellido_paterno=$request->post('apellido_paterno');
        $personas->apellido_materno=$request->post('apellido_materno');
        $personas->fecha_nacimiento=$request->post('fecha_nacimiento');
        $personas->save(); //guarda el registro en la BD

        return redirect()->route('personas.index')->with('success','Persona actualizada con exito ');
    }

   
    public function destroy(Personas $personas)
    {
        //Elimmina un registro
        
    }
}
