<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;

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

Route::get('/aluno', [AlunoController::class, 'index'])->name('aluno.index');

Route::get('/post', [PostController::class, 'index'])->name('post.index');

Route::get('/biblioteca', [BibliotecaController::class, 'index'])->name('biblioteca.index');

Route::get('/contato', [ContactController::class, 'index']);

Route::post('/contato/store', [ContactController::class, 'store'])->name('contato.store');

Route::put('/contato/update', [ContactController::class, 'update'])->name('contato.update');

Route::delete('/contato/delete/{id}', [ContactController::class, 'destroy'])
->name('contato.destroy');

Route::get('/contato/decripty', [ContactController::class, 'decripty']);