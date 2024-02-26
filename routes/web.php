<?php

use App\Http\Controllers\DocentesController;
// use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('bienvenidos');
}) -> name('panel');

Route::get('/cliente/{n}', function($n) {
    return view('cliente')-> with('clavecliente', $n);
});

// Route::get('/docentes', function () {
//     return view('docentes');
// }) -> name('docentes');

Route::get('/maestros', [DocentesController::class,'index']) -> name('maestros');

Route::get('/asignaturas', function() {
    return view('asignaturas');
}) -> name('asignaturas');

// Route::get('/alumnos', [StudentController::class, 'index']);
// Route::post('/alumnos', [StudentController::class, 'store']);

//RUTAS CON RECURSOS

Route::resource('estudiantes', StudentController::class);