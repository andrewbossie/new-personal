<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', ['caption' => 'Welcome to my portfolio!']);
});

Route::get('/work', function () {
    return Inertia::render('Work', ['caption' => 'Professional Work']);
});

Route::get('/projects', function () {
    return Inertia::render('Projects', ['caption' => 'Personal Projects']);
});

require __DIR__.'/auth.php';
