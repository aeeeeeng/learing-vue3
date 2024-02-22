<?php

use App\Http\Controllers\CompositionController;
use Illuminate\Support\Facades\Route;

Route::get('/getting-started', [CompositionController::class, 'gettingStarted']);
Route::get('/declarative-rendering', [CompositionController::class, 'declarativeRendering']);
Route::get('/attribute-bindings', [CompositionController::class, 'attributeBindings']);
Route::get('/event-listeners', [CompositionController::class, 'eventListeners']);
Route::get('/form-bindings', [CompositionController::class, 'formBindings']);
Route::get('/conditional-rendering', [CompositionController::class, 'conditionalRendering']);
Route::get('/list-rendering', [CompositionController::class, 'listRendering']);
Route::get('/computed-property', [CompositionController::class, 'computedProperty']);
Route::get('/lifecycle', [CompositionController::class, 'lifecycle']);
Route::get('/watch', [CompositionController::class, 'watch']);
Route::get('/component', [CompositionController::class, 'component']);
Route::get('/props', [CompositionController::class, 'props']);
Route::get('/emits', [CompositionController::class, 'emits']);
