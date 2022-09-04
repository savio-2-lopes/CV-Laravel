<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('page-title') </title>

    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="/css/styles.css" rel="stylesheet" />
</head>

<body class="bg-indigo" id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="{{ route('site.home') }}">Savio Lopes</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-indigo text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                @php
                    $itensMenu = [
                        [
                            'descricao' => 'Portfólio',
                            'link' => route('site.portfolio'),
                        ],
                        [
                            'descricao' => 'Sobre',
                            'link' => route('site.sobre'),
                        ],
                        [
                            'descricao' => 'Contato',
                            'link' => route('site.contato'),
                        ],
                    ];
                @endphp
                <ul class="navbar-nav ms-auto">
                    @each('partials._menu', $itensMenu, 'item')
                </ul>
            </div>
        </div>
    </nav>

    @yield('main-content')

    <footer class="footer mt-auto text-center">
        <div class="container">
            <div class="row">
                <x-section-footer>
                    <x-slot name="title">
                        <h4 class="text-uppercase mb-4">Localização</h4>
                    </x-slot>

                    <p class="lead mb-0">
                        Canas / SP
                        <br>
                        2215, Daniel Drive MO
                    </p>
                </x-section-footer>

                <x-section-footer>
                    <x-slot name="title">
                        <h4 class="text-uppercase mb-4">Links para contato</h4>
                    </x-slot>

                    <x-item-social link="https://www.linkedin.com/in/savio-lopes">
                        <i class="fab fa-fw fa-linkedin-in"></i>
                    </x-item-social>

                    <x-item-social link="https://github.com/savio-2-lopes">
                        <i class="fa-brands fa-github"></i>
                    </x-item-social>

                    <x-item-social link="https://savioaugustolopes.netlify.app">
                        <i class="fab fa-fw fa-dribbble"></i>
                    </x-item-social>
                </x-section-footer>

                <x-section-footer>
                    <x-slot name="title">
                        <h4 class="text-uppercase mb-4">Agradecimentos</h4>
                    </x-slot>

                    <p class="lead mb-0">
                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                        .
                    </p>
                </x-section-footer>
            </div>
        </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Your Website 2022</small></div>
    </div>

    <!-- Bootstrap core JS-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
