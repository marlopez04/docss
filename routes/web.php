<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', function () {
    return view('login');
});


/*



*/

use App\Http\Controllers\CausaController;

Route::get('/causas/create', [CausaController::class, 'create'])->name('causas.create');
Route::post('/causas/store', [CausaController::class, 'store'])->name('causas.store');

/*
Route::resource('causas', 'CausaController');
Route::get('causas/{id}/destroy',[
    'uses' => 'CausaController@destroy',
    'as'   => 'front.causas.create'
]);
*/