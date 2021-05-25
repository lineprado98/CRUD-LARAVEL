<?php
namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Route;



 Route::post('/login', [UserAuthController::class,'Auth']);
 Route::get('/login', [UserAuthController::class,'Auth']);
 Route::post('/servico', [ServicoController::class,'create']);
Route::get('/servicos', [ServicoController::class,'list']);
 Route::post('/novo-usuario', [UserController::class,'create']);








