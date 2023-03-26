<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Persona
{
    use HasFactory;

    public function persona()
    {
        return $this->hasOne(Persona::class, 'id', 'idPersona');
    }

    public function gerente()
    {
        return $this->belongsTo(Gerente::class);
    }
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function calcularSalario()
    {
        return 0;
    }

    public function debePagarImpuestos()
    {
        $empleado = Empleado::where('idTrabajador', '=', $this->id)->first();
        $gerente = Gerente::where('idTrabajador', '=', $this->id)->first();

        if ($empleado != "") {
            return $empleado->calcularSalario() > 1250;
        } else if ($gerente != "") {
            return $gerente->calcularSalario() > 1250;
        }
    }
}
