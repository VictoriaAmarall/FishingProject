<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FishController;
use App\Http\Controllers\TypeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/fish', [fishController::class,'index']); //lista fish
Route::get ('/fish/create', [fishController::class,'create']); //cria fish
Route::post ('/fish', [fishController::class,'store']);// guarda os dados (store)

//edit
Route::get ('/fish/edit/{fish}', [fishController::class,'edit']); //chama a função edit para editar fisho
Route::post ('/fish/update/{fish}', [fishController::class,'update']);// guarda os dados (store) após atualizar

//apagar
Route::get ('/fish/destroy/{fish}', [fishController::class,'destroy']);