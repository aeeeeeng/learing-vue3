<?php

use App\Http\Controllers\CompositionController;
use Illuminate\Support\Facades\Route;

Route::get('/getting-started', [CompositionController::class, 'gettingStarted']);