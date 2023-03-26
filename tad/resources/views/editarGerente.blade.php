@extends('template')
@section('title', 'Editar empleado')
@section('content')
    <form action="{{ route('gerente.editar') }}" method="POST">
        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
        @method('PUT')
        <input type="hidden" required name="id" value="{{ $gerente->id }}">
        <input type="text" required name="nombre" placeholder="Nombre del gerente" class="form-control mb-2" autofocus
            value="{{ $gerente->trabajador->persona->nombre }}">
        <input type="text" required name="apellidos" placeholder="Apellidos del gerente" class="form-control mb-2"
            value="{{ $gerente->trabajador->persona->apellidos }}">
        <input type="number" required name="edad" step=1 class="form-control mb-2"
            value="{{ $gerente->trabajador->persona->edad }}">
        <input type="text" required name="telefonos" placeholder="Telefonos del gerente" class="form-control mb-2"
            value="{{ $gerente->trabajador->telefonos }}">
        <input type="number" required name="salario" step="0.01" placeholder="Salario del gerente"
            class="form-control mb-2" value="{{ $gerente->salario }}" />
        <button class="btn btn-success btn-block" type="submit">
            Editar gerente
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
