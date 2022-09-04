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
                    'ativo' => true,
                    'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                    neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore
                    quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                    itaque. Nam.',
                    'titulo' => 'Log Cabin',
                    'imagem' => 'cabin.png'
                ],
                [
                    'ativo' => true,
                    'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                    neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore
                    quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                    itaque. Nam.',
                    'titulo' => 'Cake',
                    'imagem' => 'cake.png'
                ],
                [
                    'ativo' => true,
                    'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                    neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore
                    quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                    itaque. Nam.',
                    'titulo' => 'Circus',
                    'imagem' => 'circus.png'
                ],
                [
                    'ativo' => true,
                    'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                    neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore
                    quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                    itaque. Nam.',
                    'titulo' => 'Game',
                    'imagem' => 'game.png'
                ],
                [
                    'ativo' => true,
                    'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                    neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore
                    quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                    itaque. Nam.',
                    'titulo' => 'Safe',
                    'imagem' => 'safe.png'
                ],
                [
                    'ativo' => true,
                    'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                    neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore
                    quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                    itaque. Nam.',
                    'titulo' => 'Submarine',
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
