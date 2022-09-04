@extends('inheritance.layout')
@section('page-title', 'Página de Portfólio')
@section('main-content')
    <section class="page-section portfolio bg-indigo mt-auto" id="portfolio">
        <div class="container mt-5">
            <h2 class="page-section-heading text-center text-uppercase text-white mb-0">
                Projetos
            </h2>

            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="row justify-content-center">
                @forelse ($projetos as $projeto)
                    @continue ($projeto['ativo'] === false)
                    <x-item-project :imagem="$projeto['imagem']" :indice="$loop->iteration" />
                @empty
                    <h1>Nenhum projeto encontrado</h1>
                @endforelse
                @include('partials._pagination', [
                    'total' => count($projetos),
                    'first' => '<<',
                    'last' => '>>',
                ])
            </div>
        </div>
    </section>

    <!-- Portfolio Modal-->

    @forelse ($projetos as $projeto)
        @continue ($projeto['ativo'] === false)
        <x-modal 
        :descricao="$projeto['descricao']" 
        :titulo="$projeto['titulo']" 
        :imagem="$projeto['imagem']" 
        :index="$loop->iteration" 
        />
    @empty
        <h1>Nenhum projeto encontrado</h1>
    @endforelse
@endsection
