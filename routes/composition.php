<?php

use App\Http\Controllers\CompositionController;
use Illuminate\Support\Facades\Route;

Route::get('/getting-started', [CompositionController::class, 'gettingStarted']);
Route::get('/declarative-rendering', [CompositionController::class, 'declarativeRendering']);
Route::get('/attribute-bindings', [CompositionController::class, 'attributeBindings']);
Route::get('/event-listeners', [CompositionController::class, 'eventListeners']);
Route::get('/form-bindings', [CompositionController::class, 'formBindings']);
