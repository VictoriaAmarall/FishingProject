<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FishController;
use App\Http\Controllers\TypeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/fish', [FishController::class,'index']); //lista fish
Route::get ('/fish/create', [FishController::class,'create']); //cria fish
Route::post ('/fish', [FishController::class,'store']);// guarda os dados (store)

//edit
Route::get ('/fish/edit/{fish}', [FishController::class,'edit']); //chama a função edit para editar fisho
Route::post ('/fish/update/{fish}', [FishController::class,'update']);// guarda os dados (store) após atualizar

//apagar
Route::get ('/fish/destroy/{fish}', [FishController::class,'destroy']);