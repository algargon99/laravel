<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Trabajador;
use App\Models\Persona;

class EmpleadoControlador extends Controller
{
    public function mostrarEmpleados()
    {
        $empleados = Empleado::all();
        return view('empleados', @compact('empleados'));
    }

    public function crearEmpleado(Request $request)
    {
        $persona = new Persona;
        $persona->nombre = $request->nombre;
        $persona->apellidos = $request->apellidos;
        $persona->edad = $request->edad;
        $persona->save();
        $trabajador = new Trabajador;
        $trabajador->telefonos = $request->telefonos;
        $trabajador->idPersona = $persona->id;
        $trabajador->save();
        $empleado = new Empleado;
        $empleado->horasTrabajadas = $request->horasTrabajadas;
        $empleado->precioPorHora = $request->precioPorHora;
        $empleado->idTrabajador = $trabajador->id;
        $empleado->save();
        $trabajadorCon = app()->make(TrabajadorControlador::class);
        return $trabajadorCon->callAction('mostrarTrabajadores',[]);
        
    }

    public function verBorrarEmpleado(Request $request)
    {
        $empleado = Empleado::find($request->id);
        return view('borrarEmpleado', @compact('empleado'));
    }

    public function eliminarEmpleado(Request $request)
    {
        $empleado = Empleado::findOrFail($request->id);
        $trabajador = Trabajador::findOrFail($empleado->idTrabajador);
        $persona = Persona::findOrFail($trabajador->idPersona);
        $empleado->delete();
        $trabajador->delete();
        $persona->delete();
        $empleados = Empleado::all();
        return app()->make(TrabajadorControlador::class)->callAction('mostrarTrabajadores',[]);
    }

    public function verEditarEmpleado(Request $request)
    {
        $empleado = Empleado::findOrFail($request->id);
        return view('editarEmpleado', @compact('empleado'));
    }

    public function editarEmpleado(Request $request)
    {
        $empleado = Empleado::findOrFail($request->id);
        $trabajador =  Trabajador::findOrFail($empleado->idTrabajador);
        $persona =  Persona::findOrFail($trabajador->idPersona);
        $persona->nombre = $request->nombre;
        $persona->apellidos = $request->apellidos;
        $persona->edad = $request->edad;
        $persona->save();
        $trabajador->telefonos = $request->telefonos;
        $trabajador->save();
        $empleado->horasTrabajadas = $request->horasTrabajadas;
        $empleado->precioPorHora = $request->precioPorHora;
        $empleado->save();
        return app()->make(TrabajadorControlador::class)->callAction('mostrarTrabajadores', []);
    }

}
