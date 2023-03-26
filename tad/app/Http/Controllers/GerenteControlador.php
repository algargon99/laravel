<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gerente;
use App\Models\Trabajador;
use App\Models\Persona;

class GerenteControlador extends Controller
{
    public function mostrarGerentes()
    {
        $gerentes = Gerente::all();
        return view('gerentes', @compact('gerentes'));
    }

    public function crearGerente(Request $request)
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
        $gerente = new Gerente;
        $gerente->salario = $request->salario;
        $gerente->idTrabajador = $trabajador->id;
        $gerente->save();
        return app()->make(TrabajadorControlador::class)->callAction('mostrarTrabajadores', []);
    }

    public function verBorrarGerente(Request $request)
    {
        $gerente = Gerente::findOrFail($request->id);
        return view('borrarGerente', @compact('gerente'));
    }

    public function eliminarGerente(Request $request)
    {
        $gerente = Gerente::findOrFail($request->id);
        $gerente->delete();
        return app()->make(TrabajadorControlador::class)->callAction('mostrarTrabajadores', []);
    }

    public function verEditarGerente(Request $request)
    {
        $gerente = Gerente::findOrFail($request->id);
        return view('editarGerente', @compact('gerente'));
    }

    public function editarGerente(Request $request)
    {
        $gerente = Gerente::findOrFail($request->id);
        $trabajador =  Trabajador::findOrFail($gerente->idTrabajador);
        $persona =  Persona::findOrFail($trabajador->idPersona);
        $persona->nombre = $request->nombre;
        $persona->apellidos = $request->apellidos;
        $persona->edad = $request->edad;
        $persona->save();
        $trabajador->telefonos = $request->telefonos;
        $trabajador->save();
        $gerente->salario = $request->salario;
        $gerente->save();
        return app()->make(TrabajadorControlador::class)->callAction('mostrarTrabajadores', []);
    }

    
}
