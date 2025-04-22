<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PastelController;
use App\Http\Controllers\AcompanhamentoController;
use App\Http\Controllers\PedidoController;

Route::get('/montar-combo', [PedidoController::class, 'create'])->name('combo');
Route::post('/montar-combo', [PedidoController::class, 'store'])->name('combo.store');

Route::resource('pasteis', PastelController::class);
Route::resource('acompanhamentos', AcompanhamentoController::class);
Route::resource('pedidos', PedidoController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/montar-combo', function () {
    $pasteis = \App\Models\Pastel::all();
    $acompanhamentos = \App\Models\Acompanhamento::all();
    return view('combo', compact('pasteis', 'acompanhamentos'));
})->name('combo');
