<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;

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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
   //  Produtos

    Route::get('/produtos',                 [ProdutoController::class, 'show'])->name('produtos');
    Route::get('/produtos/lista_produtos',  [ProdutoController::class, 'show_list'])->name('produtos_list');
    Route::post('/produtos/store',          [ProdutoController::class, 'store'])->name('produtos_store');
    Route::get('/produtos/editar/{id}',     [ProdutoController::class, 'edit'])->name('produtos_edit');
    Route::put('/produtos/atualizar/{id}',  [ProdutoController::class, 'update'])->name('produtos_update');
    Route::get('/produtos/warning/{id}',    [ProdutoController::class, 'warning'])->name('produtos_warning');
    Route::get('/produtos/deletar/{id}',    [ProdutoController::class, 'delete'])->name('produtos_delete');
});




