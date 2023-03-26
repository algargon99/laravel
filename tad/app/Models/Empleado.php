<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Trabajador
{
    use HasFactory;
    public function trabajador()
    {
        return $this->hasOne(Trabajador::class, 'id', 'idTrabajador');
    }

    public function calcularSalario()
    {
        return parent::calcularSalario() + $this->horasTrabajadas * $this->precioPorHora * 4;
    }

    
}
