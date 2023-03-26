<?php

namespace App\Http\Controllers;

use App\Models\Gerente;
use App\Models\Empleado;
use Illuminate\Http\Request;
use App\Models\Trabajador;
use App\Models\Persona;

class TrabajadorControlador extends Controller
{

    public function mostrarTrabajadores()
    {
        $gerentes = Gerente::all();
        $empleados = Empleado::all();
        return view('trabajadores', @compact('gerentes', 'empleados'));
    }

    public function crearTrabajador(Request $request)
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
        return back()->with('mensaje', 'Trabajador creado');
    }


    public function verGerente($trabajador)
    {
        $gerente = Gerente::where('idTrabajador', '=', $trabajador->idTrabajador)->first();
        if ($gerente != "") {
            return "True";
        } else {
            return "False";
        }
    }
}
