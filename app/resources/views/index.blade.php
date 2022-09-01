<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Savio Lopes · Portfolio Freelancer </title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
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
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Sobre</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contato</a>
                    </li>
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

    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
                Projetos
            </h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="row justify-content-center">
                @forelse ($projetos as $projeto)
                    @continue ($projeto['ativo'] === false)
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                            data-bs-target="#portfolioModal{{ $loop->iteration }}">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/{{ $projeto['imagem'] }}"
                                alt="Cabin Image" />
                        </div>
                    </div>
                @empty
                    <h1>Nenhum projeto encontrado</h1>
                @endforelse
            </div>
        </div>
    </section>

    <section class="page-section bg-indigo text-white mb-0" id="about">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-white">Sobre</h2>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">
                        Estagiário em Desenvolvimento Web | Graduando em Análise e Desenvolvimento de Sistemas |
                        Palestrante.
                    </p>

                    <p class="lead">
                        Olá! Me chamo Savio Lopes e sou Estagiário em Desenvolvimento Web, graduando em Análise de
                        Sistemas pela Faculdade de Tecnologia do Estado de São Paulo e técnico em Eletrônica.
                    </p>

                    <p class="lead">
                        Possuo experiência como Estagiário em Programação pelas seguintes empresas:
                    </p>

                    <ul class="lead">
                        <li>
                            <span class="font-weight-bold">(09/2020 - 09/2021)</span> - Estagiário em programação na
                            empresa Cazalab, com foco em
                            Python;
                        </li>
                        <li>
                            <span class="font-weight-bold">(01/2022 - 04/2022)</span> - Estagiário no Setor de Inovação
                            e Tecnologia na empresa Mais
                            Top Estética, com foco em
                            PHP;
                        </li>
                        <li>
                            <span class="font-weight-bold">(05/2022 -
                                08/2022)</span> - Estagiário em programação na empresa Slideworks, com foco em
                            Javascript ;
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 me-auto">
                    <p class="lead">
                        Acredito no poder da comunicação e no trabalho em equipe. Estou aberto para experiências que me
                        desenvolva como pessoa e profissional. A cada atividade em equipe, para mim, é uma oportunidade
                        para aprender novas competências técnicas e humanas.
                    </p>

                    <p class="lead">
                        Outros canais onde você pode me encontrar:
                    </p>

                    <ul class="lead">
                        <li>
                            <span class="font-weight-bold">Github</span> - <a class="text-white" target="_blank"
                                href="https://github.com/savio-2-lopes">https://github.com/savio-2-lopes</a>;
                        </li>
                        <li>
                            <span class="font-weight-bold">Portfólio</span> - <a class="text-white" target="_blank"
                                href="https://savioaugustolopes.netlify.app/">https://savioaugustolopes.netlify.app/</a>;
                        </li>
                    </ul>
                </div>
            </div>

            <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                    <i class="fas fa-download me-2"></i>
                    Download CV
                </a>
            </div>
        </div>
    </section>

    <section class="page-section" id="contact">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
                Entre em contato
            </h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <div class="row">
                            <div class="col-12 col-md-6 form-floating mb-3">
                                <input class="form-control" id="name" type="text"
                                    placeholder="Entre com o seu nome..." data-sb-validations="required" />
                                <label for="name">Nome completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.
                                </div>
                            </div>

                            <div class="col-12 col-md-6 form-floating mb-3">
                                <input class="form-control" id="email" type="email"
                                    placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Endereço de E-mail</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">E-mail é obrigatório.
                                </div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">E-mail não é válido.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel"
                                    placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Número de Telefone/Celular</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">
                                    Nº de telefone é obrigatório.
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" rows="5" id="message" type="text" placeholder="Entre com sua mensagem..."
                                style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Mensagem</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Mensagem é obrigatória
                            </div>
                        </div>

                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Dados enviados com sucesso!</div>
                            </div>
                        </div>

                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Erro para enviar a mensagem!</div>
                        </div>

                        <div class="row col-12 mt-5">
                            <button class="btn btn-primary btn-block btn-xl disabled" id="submitButton"
                                type="submit">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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

    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-laptop-code"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cabin.png"
                                    alt="..." />
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                                    neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore
                                    quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                                    itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-laptop-code"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png"
                                    alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                                    neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore
                                    quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                                    itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-laptop-code"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png"
                                    alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                                    neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore
                                    quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                                    itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4-->

    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-laptop-code"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>

                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png"
                                    alt="Portfolio image" />

                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                                    neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore
                                    quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                                    itaque. Nam.
                                </p>

                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5-->

    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon">
                                        <i class="fas fa-laptop-code"></i>
                                    </div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png"
                                    alt="Logo" />
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                                    neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore
                                    quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                                    itaque. Nam.
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6-->

    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>

                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-laptop-code"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>

                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png"
                                    alt="Image Portfólio" />

                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                                    neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore
                                    quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                                    itaque. Nam.
                                </p>

                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
