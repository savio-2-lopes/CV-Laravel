<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Savio Lopes · Portfolio Freelancer </title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Savio Lopes</a>
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
                            'link' => '#portfolio',
                        ],
                        [
                            'descricao' => 'Sobre',
                            'link' => '#about',
                        ],
                        [
                            'descricao' => 'Contato',
                            'link' => '#contact',
                        ],
                    ];
                @endphp 
                <ul class="navbar-nav ms-auto">
                    @each('partials._menu', $itensMenu, 'item')
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead bg-indigo text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <img class="border rounded-circle masthead-avatar mb-5" src="https://github.com/savio-2-lopes.png"
                alt="Avatar" />
            <h1 class="masthead-heading text-uppercase mb-0">Savio Augusto Lopes</h1>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>
            <p class="masthead-subheading font-weight-light mb-0">
                Intern in Web Developer | React.js | Node.JS | Graduating in Systems Analysis and Development
            </p>
        </div>
    </header>

    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Localização</h4>
                    <p class="lead mb-0">
                        Canas / SP
                    </p>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Links para contato</h4>
                    <a class="btn btn-outline-light btn-social mx-1" target="_blank"
                        href="https://www.linkedin.com/in/savio-lopes/">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social mx-1" target="_blank"
                        href="https://github.com/savio-2-lopes">
                        <i class="fab fa-fw fa-linkedin-in"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social mx-1" target="_blank"
                        href="https://savioaugustolopes.netlify.app">
                        <i class="fab fa-fw fa-dribbble"></i>
                    </a>
                </div>

                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Agradecimento ao template</h4>
                    <p class="lead mb-0">
                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                        .
                    </p>
                </div>
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
