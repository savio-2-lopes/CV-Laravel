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
                    'descricao' => 'Development portfolio developed with Next JS Framer Motion and TypeScript.',
                    'titulo' => 'Personal-Portfolio-Website',
                    'imagem' => 'cv.gif'
                ],
                [
                    'ativo' => true,
                    'descricao' => 'Application in React.js and Spring Boot, which allows you to score movies, developed during Spring React Week',
                    'titulo' => 'DSMovie',
                    'imagem' => 'DSMovie.gif'
                ],
                [
                    'ativo' => true,
                    'descricao' => 'Event web platform made with React, Typescript, GraphQL, GraphCMS developed during @Rocketseat Ignite Lab 02',
                    'titulo' => 'Event-Platform-Ignite-Lab',
                    'imagem' => 'event_platform.gif'
                ],
                [
                    'ativo' => true,
                    'descricao' => 'GitHub Explorer is a project to query Github repositories in a simple and detailed way, developed during Ignite React trail',
                    'titulo' => 'Github-Explorer',
                    'imagem' => 'github-explorer.gif'
                ],
                [
                    'ativo' => true,
                    'descricao' => 'Implementation of search methods contemplating Graphical Interface, Amplitude Methods, Limited Depth, Depth, Interactive Deepening, Bidirectional, Uniform Costs, Greedy and A*.',
                    'titulo' => 'Search-Methods-AI-Flask',
                    'imagem' => 'Search-Methods-AI-Flask.gif'
                ],
                [
                    'ativo' => true,
                    'descricao' => 'Simple site encryption/decryption using Flask and Tailwind.',
                    'titulo' => 'Simple-Flask-Encryption-Ciphers',
                    'imagem' => 'Simple-Flask-Encryption-Ciphers.gif'
                ],
                [
                    'ativo' => true,
                    'descricao' => 'Clone of the Spotify platform, developed using Next.JS, Tailwind.CSS and the Spotify API, to obtain playlists from the logged in user',
                    'titulo' => 'Spotify-clone',
                    'imagem' => 'Spotify-clone.gif'
                ],
                [
                    'ativo' => true,
                    'descricao' => 'Repository containing simple web and Machine Learning projects developed with Python Frameworks',
                    'titulo' => 'Machine-Learning-Predictive-Iris',
                    'imagem' => 'IA-Iris.gif'
                ],
                [
                    'ativo' => true,
                    'descricao' => 'Repository containing simple web and Machine Learning projects developed with Python Frameworks',
                    'titulo' => 'Machine-Learning-Predictive-Diabete',
                    'imagem' => 'IA-Diabete.gif'
                ],
                [
                    'ativo' => true,
                    'descricao' => 'Simple blog using Stripe API to control payment and save data in FaunaDB.',
                    'titulo' => 'Ig News',
                    'imagem' => 'Ig.News.gif'
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
