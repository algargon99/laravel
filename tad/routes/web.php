<?php

use App\Http\Controllers\TrabajadorControlador;
use App\Http\Controllers\GerenteControlador;
use App\Http\Controllers\EmpleadoControlador;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//GERENTES

Route::get('/crearGerente', function () {
    return view('crearGerente');
})->name('crearGerentes');

Route::post('/addGerente', [GerenteControlador::class, 'crearGerente'])->name('addGerente');

Route::post('/borrarGerente', [GerenteControlador::class, 'verBorrarGerente'])->name('ver.gerente.borrar');

Route::delete('/borrarGerente', [GerenteControlador::class, 'eliminarGerente'])->name('gerente.borrar');

Route::post('/editarGerente', [GerenteControlador::class, 'verEditarGerente'])->name('ver.gerente.editar');

Route::put('/editarGerente', [GerenteControlador::class, 'editarGerente'])->name('gerente.editar');




//EMPLEADOS


Route::get('/crearEmpleado', function () {
    return view('crearEmpleado');
})->name('crearEmpleados');

Route::post('/addEmpleado', [EmpleadoControlador::class, 'crearEmpleado'])->name('addEmpleado');

Route::post('/borrarEmpleado', [EmpleadoControlador::class, 'verBorrarEmpleado'])->name('ver.empleado.borrar');

Route::delete('/borrarEmpleado', [EmpleadoControlador::class, 'eliminarEmpleado'])->name('empleado.borrar');

Route::post('/editarEmpleado', [EmpleadoControlador::class, 'verEditarEmpleado'])->name('ver.empleado.editar');

Route::put('/editarEmpleado', [EmpleadoControlador::class, 'editarEmpleado'])->name('empleado.editar');



//INDEX

Route::get('/', [TrabajadorControlador::class, 'mostrarTrabajadores'])->name('verMostrarTrabajadores');

Route::post('/', [TrabajadorControlador::class, 'mostrarTrabajadores'])->name('mostrarTrabajadores');
