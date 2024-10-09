<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectsController::class, 'index'])->name('projects.index');

Route::get('/project/{project}', [ProjectsController::class, 'show'])->name('projects.show');
