<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


// Route::get('/',  function () {
//      return view('home');
// })->name('/');

Route::get('/', [UserChartController::class,'index'])->name('home');

Route::get('/users/list',[UserController::class, 'index'])->name('list');
Route::get('/users/novo',  function () {return view('users.create');})->name('create');

Route::get('/users/{id}',[UserController::class, 'edit'])->name('edit');
Route::any('/update/{id}',[UserController::class, 'update'])->name('update');

Route::post('/users/create',[UserController::class, 'create']);
Route::any('/delete/{id}',[UserController::class, 'delete'])->name('delete');


