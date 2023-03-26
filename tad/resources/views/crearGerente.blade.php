@extends('template')
@section('title', 'Crear gerente')
@section('content')
    <form action="{{ route('addGerente') }}" method="POST">
        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
        <input type="text" required name="nombre" placeholder="Nombre del gerente" class="form-control mb-2" autofocus>
        <input type="text" required name="apellidos" placeholder="Apellidos del gerente" class="form-control mb-2">
        <input type="number" required name="edad" placeholder="Edad del gerente" step=1 class="form-control mb-2">
        <input type="text" required name="telefonos" placeholder="Tel&eacute;fonos del gerente"
            class="form-control mb-2">
        <input type="number" required name="salario" step="0.01" placeholder="Salario del gerente"
            class="form-control mb-2" />
        <button class="btn btn-success btn-block m-3" type="submit">
            Crear nuevo gerente
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
