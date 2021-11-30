<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyblogController;
use App\Http\Controllers\CursoController;
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

Route ::get ('/', MyblogController::class);

Route ::get ('home', [CursoController::class, 'home'])->name ('home');

Route ::get ('cursos', [CursoController::class, 'index'])->name ('cursos.index');

Route ::get ('cursos/create', [CursoController::class, 'create'])->name ('cursos.create');;

Route ::post('cursos/storage', [CursoController::class, 'storage'])->name ('cursos.storage');;

Route ::get ('cursos/info', [CursoController::class,'show'])->name ('cursos.show');

Route::get('cursos/created',[CursoController::class,'created'])->name('cursos.created');

Route::delete('cursos/{curso}',[CursoController::class,'destroy'])->name('cursos.destroy');

Route::get('cursos/{curso}/edit',[CursoController::class,'edit'])->name('cursos.edit');

Route::patch('cursos/{curso}',[CursoController::class,'update'])->name('cursos.update');
