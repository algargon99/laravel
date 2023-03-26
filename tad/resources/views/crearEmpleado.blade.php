@extends('template')
@section('title', 'Crear empleado')
@section('content')
    <form action="{{ route('addEmpleado') }}" method="POST">

        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
        <input type="text" required name="nombre" placeholder="Nombre del empleado" class="form-control mb-2" autofocus>
        <input type="text" required name="apellidos" placeholder="Apellidos del empleado" class="form-control mb-2">
        <input type="number" required name="edad" placeholder="Edad del empleado" step=1 class="form-control mb-2">
        <input type="text" required name="telefonos" placeholder="Tel&eacute;fonos del empleado"
            class="form-control mb-2">
        <input type="number" required name="horasTrabajadas" step="1" placeholder="Horas trabajadas del empleado"
            class="form-control mb-2" />
        <input type="number" required name="precioPorHora" step="0.01" placeholder="Precio por hora del empleado"
            class="form-control mb-2" />
        <button class="btn btn-success btn-block m-3" type="submit">
            Crear nuevo empleado
        </button>
    </form>
    <div class="d-flex justify-content-end">
        <form action="{{ route('mostrarTrabajadores') }}" method="POST">
            @csrf
            <button class="btn btn-danger btn-block" type="submit">
                Atr&aacute;s
            </button>
    </div>
    </form>
@endsection
