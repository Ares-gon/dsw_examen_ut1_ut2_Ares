<?php

use App\Http\Controllers\mensajesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/messages', function () {
    $messages = \App\Models\Message::all();
    return view('messages', ['messages' => $messages]);
})->name('messages');

Route::get('/editarMensaje/{id}', [mensajesController::class, 'editarMensaje'])->name('editarMensaje');
Route::post('/editarMensaje2/{id}', [mensajesController::class, 'editarMensaje2'])->name('editarMensaje2');