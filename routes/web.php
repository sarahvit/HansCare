<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('avaliacao')->name('avaliacao.')->group(function (){

Route::get('/', function () {
    return view('avaliacao.avaliaçãoDeEnfermagem');
})->middleware(['auth', 'verified'])->name('index');

Route::get('/historiaAtual', function () {
    return view('avaliacao.historiaAtual');
})->middleware(['auth', 'verified'])->name('historiaAtual');
});

Route::prefix('NecessidadesPsicoBio')->name('NecessidadesPsicoBio.')->group(function (){

Route::get('/', function () {
    return view('avaliacao.necessidadesPsicoBio');
})->middleware(['auth', 'verified'])->name('index');

Route::get('/NecessidadesPsicoHidra', function () {
    return view('avaliacao.nssPsicoBioHidra');
})->middleware(['auth', 'verified'])->name('psicobioHidra');

Route::get('/NecessidadesPsicoSono', function () {
    return view('avaliacao.nssPsicoBioSono');
})->middleware(['auth', 'verified'])->name('psicobioSono');

Route::get('/NecessidadesPsicoAbrigo', function () {
    return view('avaliacao.nssPsicoBioAbrigo');
})->middleware(['auth', 'verified'])->name('psicobioAbrigo');

Route::get('/NecessidadesPsicoBioReguT', function () {
    return view('avaliacao.nssPsicoBioReguT');
})->middleware(['auth', 'verified'])->name('psicobioReguT');

Route::get('/NecessidadesPsicoBioSex', function () {
    return view('avaliacao.nssPsicoBioSex');
})->middleware(['auth', 'verified'])->name('psicobioSex');

Route::get('/NecessidadesPsicoBioNeuro', function () {
    return view('avaliacao.nssPsicoBioNeuro');
})->middleware(['auth', 'verified'])->name('psicobioNeuro');

Route::get('/NecessidadesPsicoBioSensi', function () {
    return view('avaliacao.nssPsicoBioSensi');
})->middleware(['auth', 'verified'])->name('psicobioSensi');
});
Route::get('/NecessidadesPsicossociais', function () {
    return view('avaliacao.necessidadesPsicoSSociais');
})->middleware(['auth', 'verified'])->name('psicossociais');

Route::get('/NecessidadesPsicoEsp', function () {
    return view('avaliacao.necessidadesPsicoEsp');
})->middleware(['auth', 'verified'])->name('psicoespirituais');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
