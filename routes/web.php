<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PastelController;
use App\Http\Controllers\AcompanhamentoController;

Route::resource('pasteis', PastelController::class);
Route::resource('acompanhamentos', AcompanhamentoController::class);

Route::get('/', function () {
    return redirect()->route('pasteis.index');
});
