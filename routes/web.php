<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;

Route::get('/', function () {
    return view('pages.home');
});

Route::post('/grade', [GradeController::class, 'getGrade']);
