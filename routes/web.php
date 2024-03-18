<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('estudiantes', function() {
//     return view('estudiantes');
// }) ->middleware(['auth', 'verified'])->name('estudiantes');

Route::get('maestros', function() {
    return view('maestros');
}) ->middleware(['auth', 'verified'])->name('maestros');

// Route::get('asignaturas', function() {
//     return view('asignaturas');
// }) ->middleware(['auth', 'verified'])->name('asignaturas');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('estudiantes', StudentController::class);
    Route::resource('asignaturas', SubjectController::class);
});

Route::get('accessnoauth', function() {
    return view('accessnoauth');
})->name('accessnoauth');

Route::get('componente', function() {
    return view('livewire.examples.example1');
})->name('componente');

require __DIR__.'/auth.php';

//RECURSOS
