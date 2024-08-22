<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;

Route::get('/', [CertificateController::class, 'index'])->name('certificate');
Route::post('/certificate', [CertificateController::class, 'generate'])->name('certificate.generate');
Route::get('/certificates/{certificateNumber}', [CertificateController::class, 'show'])->name('certificate.show');
