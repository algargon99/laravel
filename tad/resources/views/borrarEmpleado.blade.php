@extends('template')
@section('title', 'Eliminar empleado')
@section('content')
    <p class="h4">Detalle del empleado</p>
    <table class="table m-3 rounded-2 bg-white">
        <tr class="table-row  text-center align-middle">
            <td class="fw-bold">Nombre</td>
            <td>{{ $empleado->trabajador->persona->nombre }}</td>
        </tr>
        <tr class="table-row  text-center align-middle">
            <td class="fw-bold">Apellidos</td>
            <td>{{ $empleado->trabajador->persona->apellidos }}</td>
        </tr>
        <tr class="table-row  text-center align-middle">
            <td class="fw-bold">Edad</td>
            <td>{{ $empleado->trabajador->persona->edad }}</td>
        </tr>
        <tr class="table-row  text-center align-middle">
            <td class="fw-bold">Tel&eacute;fonos</td>
            <td>{{ $empleado->trabajador->telefonos }}</td>
        </tr>
        <tr class="table-row  text-center align-middle">
            <td class="fw-bold">Horas trabajadas</td>
            <td>{{ $empleado->horasTrabajadas }}</td>
        </tr>
        <tr class="table-row  text-center align-middle">
            <td class="fw-bold">Precio por hora</td>
            <td>{{ $empleado->precioPorHora }}</td>
        </tr>
    </table>
    <form action="{{ route('empleado.borrar') }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{ $empleado->id }}">
        <button class="btn btn-danger btn-block" type="submit">
            Eliminar empleado
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
