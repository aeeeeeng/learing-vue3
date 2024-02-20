<?php

use App\Http\Controllers\OptionsController;
use Illuminate\Support\Facades\Route;

Route::get('/getting-started', [OptionsController::class, 'gettingStarted']);
Route::get('/declarative-rendering', [OptionsController::class, 'declarativeRendering']);
Route::get('/attribute-bindings', [OptionsController::class, 'attributeBindings']);
Route::get('/event-listeners', [OptionsController::class, 'eventListeners']);
