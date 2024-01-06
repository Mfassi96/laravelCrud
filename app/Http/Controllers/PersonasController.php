<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
 
    public function index()
    {
        //pagina de inicio
    }


    public function create()
    {
        // vista del formulario para agregar personas
    }

   
    public function store(Request $request)
    {
        // guardar datos en la BD
    }


    public function show(Personas $personas)
    {
        // Obtener solo 1 registro
    }

    public function edit(Personas $personas)
    {
        // metodo para traer datos para editar y se los coloca en una vista de form
    }

   
    public function update(Request $request, Personas $personas)
    {
        // este metodo actualiza los datos en la BD
    }

   
    public function destroy(Personas $personas)
    {
        //Elimmina un registro
    }
}
