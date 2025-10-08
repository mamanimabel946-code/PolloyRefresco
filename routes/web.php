<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Categorias;
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Detalle_Ventas;
use App\Http\Controllers\Productos;
use App\Http\Controllers\Usuarios;
use App\Http\Controllers\Ventas;
use Illuminate\Support\Facades\Route;
Route::get('/crear-admin',[AuthController::class,'crearAdmin']);
Route::get('/',[AuthController::class,'index'])->name('login');
Route::post('/logear',[AuthController::class,'logear'])->name('logear');

Route::middleware("auth")->middleware('auth')->group(function(){
    Route::get('/home', [Dashboard::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

//Route::get('/home',[Dashboard::class,'index'])->name('home');
Route::prefix('ventas')->middleware('auth')->group(function(){
    Route::get('/nueva-venta',[Ventas::class,'index'])->name('venta-nueva');
});
Route::prefix('detalle_ventas')->middleware('auth')->group(function(){
    Route::get('/detalle-venta',[Detalle_Ventas::class,'index'])->name('ventas-detalle');
});
Route::prefix('categorias')->middleware('auth')->group(function(){
    Route::get('/categorias',[Categorias::class,'index'])->name('categoria');
    Route::get("/create",[Categorias::class,'create'])->name('categoria.create');
    Route::post("/store",[Categorias::class,'store'])->name('categoria.store');
    Route::get("/show/{id}",[Categorias::class,'show'])->name('categoria.show');
    Route::delete("/destroy/{id}",[categorias::class,'destroy'])->name('categoria.destroy');
    Route::get("/edit/{id}",[Categorias::class,'edit'])->name('categoria.edit');
    Route::put("/update/{id}",[categorias::class,'update'])->name('categoria.update');

});
Route::prefix('productos')->middleware('auth')->group(function(){
    Route::get('/productos',[Productos::class,'index'])->name('producto');
    Route::get("/create",[Productos::class,'create'])->name('producto.create');
    Route::post("/store",[Productos::class,'store'])->name('producto.store');
});
Route::prefix('clientes')->middleware('auth')->group(function(){
    Route::get('/clientes',[Clientes::class,'index'])->name('cliente');
    Route::get("/create",[Clientes::class,'create'])->name('cliente.create');
    Route::post("/store",[Clientes::class,'store'])->name('cliente.store');
    Route::get("/show/{id}",[Clientes::class,'show'])->name('cliente.show');
    Route::delete("/destroy/{id}",[Clientes::class,'destroy'])->name('cliente.destroy');
    Route::get("/edit/{id}",[Clientes::class,'edit'])->name('cliente.edit');
    Route::put("/update/{id}",[Clientes::class,'update'])->name('cliente.update');
});
Route::prefix('usuarios')->middleware('auth')->group(function(){
    Route::get('/usuarios',[Usuarios::class,'index'])->name('usuario');
    Route::get('/create', [Usuarios::class, 'create'])->name('usuario.create');
    Route::post('/store', [Usuarios::class, 'store'])->name('usuario.store');
    Route::get('/edit/{id}', [Usuarios::class, 'edit'])->name('usuario.edit');
    Route::put('/update/{id}', [Usuarios::class, 'update'])->name('usuario.update');
    Route::get('/tbody', [Usuarios::class, 'tbody'])->name('usuario.tbody');
    Route::get('/cambiar-estado/{id}/{estado}', [Usuarios::class, 'estado'])->name('usuario.estado');
    Route::get('/cambiar-password/{id}/{password}', [Usuarios::class, 'cambio_password'])->name('usuario.password');
});