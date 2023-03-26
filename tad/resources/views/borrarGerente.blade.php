<!DOCTYPE html>
<html lang="en">

@extends('template')
@section('title', 'Eliminar gerente')
@section('content')
    <p class="h4">Detalle del gerente</p>
    <table class="table m-3 rounded-2 bg-white">
        <tr class="table-row  text-center align-middle">
            <td class="fw-bold">Nombre</td>
            <td>{{ $gerente->trabajador->persona->nombre }}</td>
        </tr>
        <tr class="table-row  text-center align-middle">
            <td class="fw-bold">Apellidos</td>
            <td>{{ $gerente->trabajador->persona->apellidos }}</td>
        </tr>
        <tr class="table-row  text-center align-middle">
            <td class="fw-bold">Edad</td>
            <td>{{ $gerente->trabajador->persona->edad }}</td>
        </tr>
        <tr class="table-row  text-center align-middle">
            <td class="fw-bold">Tel&eacute;fonos</td>
            <td>{{ $gerente->trabajador->telefonos }}</td>
        </tr>
        <tr class="table-row  text-center align-middle">
            <td class="fw-bold">Horas trabajadas</td>
            <td>{{ $gerente->salario }}</td>
        </tr>
    </table>
    <form action="{{ route('gerente.borrar') }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{ $gerente->id }}">
        <button class="btn btn-danger btn-block" type="submit">
            Eliminar gerente
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
