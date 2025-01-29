<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\facturaControllers;


Route::middleware("guest")->group(function () {

    Route::get('/', [Users::class, 'index'])->name('users.index');
    Route::get('/crearUsuario', [Users::class, 'create'])->name('users.create');
    Route::post('/storeUsuario', [Users::class, 'store'])->name('users.store');
    Route::post('/logearUsuario', [Users::class, 'logear'])->name('users.logear');
    Route::get('/olvido', [Users::class, 'olvido'])->name('users.olvido');
    Route::post('/recuperar', [Users::class, 'recuperar'])->name('users.recuperar');
    Route::get('/enviarClave/{usuario}', [Users::class, 'enviarNuevaClave'])->name('users.enviarNuevaClave');
    Route::put('/cambiarNuevaClave/{usuario}', [Users::class, 'cambiarNuevaClave'])->name('users.cambiarNuevaClave');
});

Route::middleware("auth")->group(function () {
    Route::get('/home', [Users::class, 'home'])->name('users.home');
    Route::get('/logoutUsuario', [Users::class, 'logout'])->name('users.logout');
    Route::get('/perfilUsuario', [Users::class, 'perfil'])->name('users.perfil');

    Route::resource('usuarios', UsuariosController::class);
    Route::resource('empleados', EmpleadosController::class);
    Route::resource('books', BooksController::class);
    Route::resource('facturas', facturaControllers::class);
    Route::post('/booksShoop', [BooksController::class, 'shoop'])->name('books.shoop');
    Route::get('/booksRead', [Users::class, 'read'])->name('books.read');
    Route::get('/booksRead/{books}', [BooksController::class, 'readBooks'])->name('books.readBooks');
    Route::get('/registroBooks', [BooksController::class, 'inventario'])->name('books.inventario'); 
    Route::post('/BooksSearch', [BooksController::class, 'search'])->name('books.search'); 

    // Route::get('/registroUsuarios', [UsuariosController::class, 'index'])->name('index');
    // Route::get('/registroUsuarios-crear', [UsuariosController::class, 'create'])->name('create');
    // Route::post('/store', [UsuariosController::class, 'store'])->name('store');
    // Route::get('/registroUsuarios-edit/{id}', [UsuariosController::class, 'edit'])->name('edit');
    // Route::put('/update/{id}', [UsuariosController::class, 'update'])->name('update');
    // Route::delete('/destroy/{id}', [UsuariosController::class, 'destroy'])->name('destroy');

    // Route::get('/registroEmpleados', [EmpleadosController::class, 'index'])->name('indexEmpleados');
    // Route::get('/registroEmpleados-crear', [EmpleadosController::class, 'create'])->name('createEmpleados');
    // Route::post('/storeEmpleados', [EmpleadosController::class, 'store'])->name('storeEmpleados');
    // Route::get('/registroEmpleados-edit/{id}', [EmpleadosController::class, 'edit'])->name('editEmpleados');
    // Route::put('/updateEmpleados-edit/{id}', [EmpleadosController::class, 'update'])->name('updateEmpleados');

});
