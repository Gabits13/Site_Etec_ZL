<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/sobre', [HomeController::class, 'sobrenos'])->name('sobrenos');
Route::get('/contato', [HomeController::class, 'contato'])->name('contato');
Route::get('/cursos', [HomeController::class, 'cursos'])->name('cursos');
Route::get('/departamentos', [HomeController::class, 'departamentos'])->name('departamentos');

