@extends('inheritance.layout')
@section('page-title', 'Contato')
@section('main-content')
    <section class="page-section mt-auto bg-indigo" id="contact">
        <div class="container mt-5">
            <h2 class="page-section-heading text-center text-uppercase text-white mb-0">
                Entre em contato
            </h2>

            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="container row justify-content-center mt-5">
                <div class="col-lg-8 col-xl-7">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <div class="row">
                            <div class="col-12 col-md-6 form-floating mb-3">
                                <input class="form-control bg-indigo" id="name" type="text"
                                    placeholder="Entre com o seu nome..." data-sb-validations="required" />
                                <label for="name">Nome completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nome é obrigatório.
                                </div>
                            </div>

                            <div class="col-12 col-md-6 form-floating mb-3">
                                <input class="form-control bg-indigo" id="email" type="email"
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
                                <input class="form-control bg-indigo" id="phone" type="tel"
                                    placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Número de Telefone/Celular</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">
                                    Nº de telefone é obrigatório.
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control bg-indigo" rows="5" id="message" type="text"
                                placeholder="Entre com sua mensagem..." style="height: 10rem" data-sb-validations="required"></textarea>
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

                        <div class="row col-12 mx-auto mt-5">
                            <button class="btn btn-primary btn-block btn-xl disabled" id="submitButton" type="submit">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
