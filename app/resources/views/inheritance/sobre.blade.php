@extends('inheritance.layout')
@section('page-title', 'Sobre Nós')
@section('main-content')
    <section class="page-section bg-indigo text-white mb-0 mt-auto" id="about">
        <div class="container mt-5">
            <h2 class="page-section-heading text-center text-uppercase text-white">Sobre</h2>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="container row d-flex text-gray justify-content-center">
                <div class="col-lg-4">
                    <p class="lead">
                        Dev Jr | Graduando em Análise e Desenvolvimento de Sistemas.
                    </p>
                    <p class="lead">
                        Olá! Me chamo Savio Lopes, graduando em Análise de
                        Sistemas pela Faculdade de Tecnologia do Estado de São Paulo e técnico em Eletrônica.
                    </p>
                    <p class="lead">
                        Possuo experiência como Estagiário em Programação pelas seguintes empresas:
                    </p>
                    <ul class="lead">
                        <li>
                            <span class="font-weight-bold">(05/2022 -
                                08/2022)</span> - Estagiário em programação na empresa Slideworks, com foco em
                            Javascript
                        </li>                       
                        <li>
                            <span class="font-weight-bold">(01/2022 - 04/2022)</span> - Estagiário no Setor de Inovação
                            e Tecnologia na empresa Mais
                            Top Estética, com foco em
                            PHP;
                        </li>
                        <li>
                            <span class="font-weight-bold">(11/2020 - 11/2021)</span> - Estagiário em programação na
                            empresa Cazalab, com foco em
                            Python;
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <p class="lead">
                        Acredito no poder da comunicação e no trabalho em equipe.
                    </p>
                    <p class="lead">
                        Estou aberto para experiências que me
                        desenvolva como pessoa e profissional.
                    </p>
                    <p class="lead">
                        A cada atividade em equipe, para mim, é uma oportunidade
                        para aprender novas competências técnicas e humanas.
                    </p>
                    <p class="lead">
                        Outros canais onde você pode me encontrar:
                    </p>
                    <ul class="lead">
                        <li>
                            <span class="font-weight-bold">Github</span>: <a target="_blank"
                                href="https://github.com/savio-2-lopes">https://github.com/savio-2-lopes</a>
                        </li>
                        <li>
                            <span class="font-weight-bold">Portfólio</span>: <a target="_blank"
                                href="https://savioaugustolopes.netlify.app/">https://savioaugustolopes.netlify.app/</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="/CV-Savio_Lopes.pdf" download="CV-Savio_Lopes.pdf">
                    <i class="fas fa-download me-2"></i>
                    Download CV
                </a>
            </div>
        </div>
    </section>
@endsection
