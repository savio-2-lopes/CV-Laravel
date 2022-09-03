<?php

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

Route::get('/site/inheritance', [SiteInheritanceController::class, 'home']);
Route::get('/site/inheritance/portfolio', [SiteInheritanceController::class, 'portfolio']);
Route::get('/site/inheritance/sobre', [SiteInheritanceController::class, 'sobre']);
Route::get('/site/inheritance/contato', [SiteInheritanceController::class, 'contato']);

Route::get('/', function () {
    return view('index', [
        'projetos' => [
            [
                'ativo' => false,
                'imagem' => 'cabin.png'
            ],
            [
                'ativo' => true,
                'imagem' => 'cake.png'
            ],
            [
                'ativo' => true,
                'imagem' => 'circus.png'
            ],
            [
                'ativo' => true,
                'imagem' => 'game.png'
            ],
            [
                'ativo' => true,
                'imagem' => 'safe.png'
            ],
            [
                'ativo' => true,
                'imagem' => 'submarine.png'
            ],
        ]
    ]);
});
