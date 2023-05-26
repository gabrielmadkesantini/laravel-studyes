<?php

use App\Http\Controllers\ProdutosController;
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


Route::get("/products", [ProdutosController::class, 'index'])->name('products');

Route::get("/produtos/add", [ProdutosController::class, 'add'])->name('products.products.add');

Route::post("/produtos/add", [ProdutosController::class, 'addSave'])->name('products.products.addSave');
