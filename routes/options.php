<?php

use App\Http\Controllers\OptionsController;
use Illuminate\Support\Facades\Route;

Route::get('/getting-started', [OptionsController::class, 'gettingStarted']);
