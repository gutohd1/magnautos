<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VehiclesController;

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

Route::get('/', function () {
    return redirect('login');
});

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/veiculos', [VehiclesController::class, 'index'])->name('vehicles');

Route::prefix('veiculos')->group(function(){
    Route::controller(VehiclesController::class)->group(function()
    {
        Route::name('vehicles')->get('', 'index');
        Route::name('new.action')->post('/novo', 'store');
        Route::name('new.form')->get('/novo', 'new');
    });
});
