<?php
// routes/web.php

use App\Http\Controllers\BootcampController;

Route::get('/', [BootcampController::class, 'index'])->name('bootcamp.index');
Route::post('/kuesioner', [BootcampController::class, 'storeKuesioner'])->name('kuesioner.store');
Route::get('/hasil-kuesioner', [BootcampController::class, 'hasilKuesioner'])->name('kuesioner.hasil');