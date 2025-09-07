<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tests/pdf', function () {
    return view('tests.pdf');
});
Route::get('/resume/create', [ResumeController::class, 'create'])->name('resume.create');
Route::post('/resume', [ResumeController::class, 'store'])->name('resume.store');
Route::get('/resume/{resume}', [ResumeController::class, 'show'])->name('resume.show');
Route::get('/resume/{id}/download', [ResumeController::class, 'download'])->name('resume.download');

