<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\HomeController;

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

Route::controller(HomeController::class)->group(function()
{
    Route::name('inicio')->get('/', 'index');
});

Route::prefix('estoque')->group(function(){
    Route::controller(VehicleController::class)->group(function()
    {
        Route::name('estoque')->get('/', 'index');
        Route::name('detalhes')->get('/{vehicle}', 'show');
    });
});
Route::name('contato')->get('fale-conosco', function ()
{
    return view('contato');
});
Route::name('sobre')->get('sobre-nos', function ()
{
    return view('sobre');
});
Route::name('depoimentos')->get('depoimentos', function ()
{
    return view('depoimentos');
});
Route::name('faq')->get('faq', function ()
{
    return view('faq');
});
Route::name('termos')->get('termos', function ()
{
    return view('termos');
});
