<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CausaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

*/

/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/causas/create', [CausaController::class, 'create'])->name('causas.create');
*/

/*
Route::get('/causas/create', [CausaController::class, 'create'])->name('causas.create');

Route::post('/causas/store', [CausaController::class, 'store'])->name('causas.store');
*/

//Route::resource('causas', CausaController::class);

//Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/', [CausaController::class, 'index'])->name('causas.index');
    
    Route::resource('causas', CausaController::class);

//});