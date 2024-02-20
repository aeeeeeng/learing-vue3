<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'composition', 'as' => 'composition'], function () {
    require_once __DIR__ . '/composition.php';
});

Route::group(['prefix' => 'options', 'as' => 'options'], function () {
    require_once __DIR__ . '/options.php';
});