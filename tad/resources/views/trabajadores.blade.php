@extends('template')
@section('title', 'Trabajadores')
@section('content')

    @if ($gerentes == '[]' && $empleados == '[]')
        <div class="alert alert-info">
            <span>No hay trabajadores dados de alta</span>
        </div>
    @else
        <table class="table m-3 rounded-2 bg-white">
            <thead>
                <tr class="table-row  text-center align-middle">
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Telefono</th>
                    <th>Salario</th>
                    <th>Impuestos</th>
                    <th>Gerente</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>


            @foreach ($gerentes as $gerente)
                <tr class="table-row text-center align-middle">
                    <td>{{ $gerente->trabajador->persona->nombre }}</td>
                    <td>{{ $gerente->trabajador->persona->apellidos }}</td>
                    <td>{{ $gerente->trabajador->persona->edad }}</td>
                    <td>{{ $gerente->trabajador->telefonos }}</td>
                    <td>{{ $gerente->calcularSalario() }}</td>
                    <td>
                        @if ($gerente->trabajador->debePagarImpuestos() == '')
                            No
                        @else
                            S&iacute;
                        @endif
                    </td>
                    <td>S&iacute;</td>

                    <td>
                        <form action="{{ route('ver.gerente.editar') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $gerente->id }}">
                            <button class="btn btn-warning btn-block" type="submit">
                                Editar
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('ver.gerente.borrar') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $gerente->id }}">
                            <button class="btn btn-danger btn-block" type="submit">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @foreach ($empleados as $empleado)
                <tr class="table-row text-center align-middle">
                    <td>{{ $empleado->trabajador->persona->nombre }}</td>
                    <td>{{ $empleado->trabajador->persona->apellidos }}</td>
                    <td>{{ $empleado->trabajador->persona->edad }}</td>
                    <td>{{ $empleado->trabajador->telefonos }}</td>
                    <td>{{ $empleado->calcularSalario() }}</td>
                    <td>
                        @if ($empleado->trabajador->debePagarImpuestos() == '')
                            No
                        @else
                            S&iacute;
                        @endif
                    </td>
                    <td>No</td>
                    <td>
                        <form action="{{ route('ver.empleado.editar') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $empleado->id }}">
                            <button class="btn btn-warning btn-block" type="submit">
                                Editar
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('ver.empleado.borrar') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $empleado->id }}">
                            <button class="btn btn-danger btn-block" type="submit">
                                Eliminar
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
    @endif
@endsection
