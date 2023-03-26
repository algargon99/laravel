@extends('template')
@section('title', 'Editar empleado')
@section('content')
    <form action="{{ route('empleado.editar') }}" method="POST">
        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
        @method('PUT')
        <input type="hidden" required name="id" value="{{ $empleado->id }}">
        <input type="text" required name="nombre" placeholder="Nombre del empleado" class="form-control mb-2" autofocus
            value="{{ $empleado->trabajador->persona->nombre }}">
        <input type="text" required name="apellidos" placeholder="Apellidos del empleado" class="form-control mb-2"
            value="{{ $empleado->trabajador->persona->apellidos }}">
        <input type="number" required name="edad" placeholder="Edad del empleado" step=1 class="form-control mb-2"
            value="{{ $empleado->trabajador->persona->edad }}">
        <input type="text" required name="telefonos" placeholder="Tel&eacute;fonos del empleado" class="form-control mb-2"
            value="{{ $empleado->trabajador->telefonos }}">
        <input type="number" required name="horasTrabajadas" step="0.01" placeholder="Horas trabajadas del empleado"
            class="form-control mb-2" value="{{ $empleado->horasTrabajadas }}" />
        <input type="number" required name="precioPorHora" step="0.01" placeholder="Precio por hora del empleado"
            class="form-control mb-2" value="{{ $empleado->precioPorHora }}" />
        <button class="btn btn-success btn-block" type="submit">
            Editar empleado
        </button>
    </form>
    <div class="d-flex justify-content-end">
        <form action="{{ route('mostrarTrabajadores') }}" method="POST">
            @csrf
            <button class="btn btn-danger btn-block" type="submit">
                Atr&aacute;s
            </button>
        </form>
    </div>
@endsection
