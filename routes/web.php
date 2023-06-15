<?php

use App\Http\Controllers\ProductsController;
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
Route::get('/', function(){
    return view("welcome");
})->name('home');

Route::get("/products", [ProductsController::class, 'index'])->name('products');

Route::get("/produtos/add", [ProductsController::class, 'add'])->name('products.products.add');

Route::post("/produtos/add", [ProductsController::class, 'addSave'])->name('products.products.addSave');

Route::get("/products/{product}", [ProductsController::class, 'view']) -> name('products.products.view');

Route::get("/products/edit/{products}", [ProductsController::class, 'edit']) -> name('products.products.edit');

Route::post("/products/edit/{products}", [ProductsController::class, 'editedSave'])->name('products.products.editedSave');

Route::get("/products/delete/{products}", [ProductsController::class, 'deleteProducts'])->name("products.products.deleteproduct");

Route::post("/products/real/delete/{products}", [ProductsController::class, 'deleteProducts'])->name("products.products.deleteproductforeal");

