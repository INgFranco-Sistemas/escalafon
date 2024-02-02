<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrabajadoreController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/', [App\Http\Controllers\TrabajadoreController::class, 'index'])->name('trabajadores.index');
Route::get('/trabajadores/create', [App\Http\Controllers\TrabajadoreController::class, 'create'])->name('trabajadores.create');
Route::get('/trabajadores/{trabajadore}/edit', [App\Http\Controllers\TrabajadoreController::class, 'edit'])->middleware(['auth', 'verified'])->name('trabajadores.edit');
Route::get('/trabajadores/{trabajadore}', [App\Http\Controllers\TrabajadoreController::class, 'show'])->middleware(['auth', 'verified'])->name('trabajadores.show');

Route::get('/estudios/{trabajadore}', [App\Http\Controllers\EstudioController::class, 'index'])->middleware(['auth', 'verified'])->name('estudios.index');
Route::get('/estudios/create/{trabajadore}', [App\Http\Controllers\EstudioController::class, 'create'])->middleware(['auth', 'verified'])->name('estudios.create');

Route::get('/experiencias/{trabajadore}', [App\Http\Controllers\ExperienciaController::class, 'index'])->middleware(['auth', 'verified'])->name('experiencias.index');
Route::get('/experiencias/create/{trabajadore}', [App\Http\Controllers\ExperienciaController::class, 'create'])->middleware(['auth', 'verified'])->name('experiencias.create');

Route::get('/capacitaciones/{trabajadore}', [App\Http\Controllers\CapacitacionController::class, 'index'])->middleware(['auth', 'verified'])->name('capacitaciones.index');
Route::get('/capacitaciones/create/{trabajadore}', [App\Http\Controllers\CapacitacionController::class, 'create'])->middleware(['auth', 'verified'])->name('capacitaciones.create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
