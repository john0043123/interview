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
*/

Route::get('/', [\App\Http\Controllers\PortfolioController::class, 'index']);

Route::get('/portfolio/{portfolio}', [\App\Http\Controllers\PortfolioController::class, 'detail']);

Route::post('/filter/portfolio', [\App\Http\Controllers\PortfolioController::class, 'filter']);

Route::get('/set-locale/{locale}', function ($locale) {
    session([
        'locale' => $locale
    ]);

    if(!\Illuminate\Support\Facades\Request::ajax()) {
        return redirect(url()->previous());
    }
});
