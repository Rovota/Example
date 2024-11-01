<?php

/**
 * @copyright   Copyright (c), Léandro Tijink
 * @license     MIT
 */

use App\Controllers\HomeController;
use Rovota\Framework\Facades\Route;
use Rovota\Framework\Http\Enums\StatusCode;

// -----------------

// Status Check
Route::get('/ping', function() {
	return StatusCode::Ok;
});

// -----------------

// Home
Route::get('/', [HomeController::class, 'index'])->name('homepage');