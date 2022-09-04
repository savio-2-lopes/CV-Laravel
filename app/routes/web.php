<?php

use App\Http\Controllers\SiteComponentsController;
use App\Http\Controllers\SiteInheritanceController;
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

Route::get('/', [SiteInheritanceController::class, 'home'])->name('site.home');
Route::get('/portfolio', [SiteInheritanceController::class, 'portfolio'])->name('site.portfolio');
Route::get('/sobre', [SiteInheritanceController::class, 'sobre'])->name('site.sobre');
Route::get('/contato', [SiteInheritanceController::class, 'contato'])->name('site.contato');
