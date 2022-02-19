<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\FrameworkController;
use App\Http\Controllers\ProgramlangController;
use App\Http\Controllers\ToolController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('aboutme', [AboutController::class, 'index']);

Route::get('framework', [FrameworkController::class, 'index']);
Route::post('add-framework', [FrameworkController::class, 'store']);

Route::get('lang', [ProgramlangController::class, 'index']);

Route::get('tool', [ToolController::class, 'index']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
