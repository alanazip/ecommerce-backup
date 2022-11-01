<?php

//use App\Http\Controllers\ContatoManagerController;
//use App\Http\Controllers\ContatosController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoManagerController;
use App\Http\Controllers\CategoriaManagerController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\CompraManagerController;
use App\Http\Controllers\FornecedorManagerController;
use App\Http\Controllers\CategoriasController;
 

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

Route::get('/',[HomeController::class,'index'])->name('site.home');

Route::get('/produtos', [ProdutosController::class, 'index'])->name('site.produtos');

Route::get('/compras', [ComprasController::class, 'index'])->name('site.compras');

//Route::get('/contatos', [ContatosController::class, 'index'])->name('site.contatos');

Route::get('/fornecedores', [FornecedoresController::class, 'index'])->name('site.fornecedores');

Route::get('/categorias', [CategoriasController::class, 'index'])->name('site.categorias');

//Route::post('/contatos', [ContatosController::class, 'store'])->name('site.contatos');

Route::post('/fornecedores', [FornecedoresController::class, 'store'])->name('site.fornecedores');

Route::post('/categorias', [CategoriasController::class, 'store'])->name('site.categorias');

Route::resource('/produtosmanager', ProdutoManagerController::class);

Route::resource('/comprasmanager', CompraManagerController::class);

Route::resource('/contatosmanager', ContatoManagerController::class);

Route::resource('/fornecedoresmanager', FornecedorManagerController::class);

Route::resource('/categoriasmanager', CategoriaManagerController::class);