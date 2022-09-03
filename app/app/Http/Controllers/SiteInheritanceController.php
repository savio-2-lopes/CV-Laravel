<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteInheritanceController extends Controller
{
    public function home()
    {
        return view('inheritance.home');
    }

    public function portfolio()
    {
        return view('inheritance.portfolio', [
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
    }

    public function sobre()
    {
        return view('inheritance.sobre');
    }

    public function contato()
    {
        return view('inheritance.contato');
    }
}
