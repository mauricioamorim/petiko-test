<!doctype html>
<html lang="pt-br" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    @yield('head')
</head>

<body>
    <!-- BARRA DE CUPOM -->
    <div class="d-none d-sm-block" style="background-color: #a21919">
        <div class="row align-items-center text-white">
            <div class="col">
                <p class="align-middle pt-2 text-white text-center">
                    Processo Seletivo – Desenvolvedor - Mauricio de Amorim Alexandre da Silva
                </p>
            </div>
        </div>
    </div>

    <!-- MENU PRINCIPAL -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top menu-principal">
        <div class="container justify-content-center">
            <a href="/" class="navbar-brand d-lg-none">
                <img class="img-mob" src="https://box.petiko.com.br/images/new-index-petiko.png">
            </a>
            <div class="collapse navbar-collapse align-middle" id="navbarSupportedContent">
                <ul class="nav navbar-nav navbar-logo mx-auto d-none d-md-block">
                    <li class="nav-item">
                        <a class="nav-link navbar-brand" href="/"><img class="img-mob" src="https://box.petiko.com.br/images/new-index-petiko.png"></a></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container pt-4">
        @yield('content')
    </div>

    @yield('scripts')

    <div class="container-fluid ml-0 mr-0 pr-3 pl-3 align-self-end bg-footer mt-5 border-top pt-4">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <h5 class="Baloo-Regular text-info">Precisa de Ajuda?</h5>
                <div class="row">
                    <div class="col-10 text-muted"><b>mauricioamorim.contato@gmail.com</b></div>
                </div>
            </div>
            <div class="col-md-3">
                <h5 class="Baloo-Regular text-info">Formas de Contratação</h5>
                <div class="row">
                    <div class="col-10 text-muted"><b>Estágio - CLT - PJ</b></div>
                </div>
            </div>
            <div class="col-md-3 text-left">
                <h5 class="Baloo-Regular text-info">Ambiente 100% seguro</h5>
                <div class="container p-0">
                    <div class="row align-items-start p-0">
                        <div class="col-4">
                            <a href="#" target="_blank" alt="Google Safe">
                                <img class="img-fluid center-block" src="https://box.petiko.com.br/images/google-safe-browsing.png" style="max-width: 115px;max-height: 68px;">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#" alt="Certificado comodo secure">
                                <img class="img-fluid center-block" src="https://box.petiko.com.br/images/comodo.png" style="max-width: 115px;">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#" alt="RA 1000 Reclame aqui">
                                <img class="ml-2 img-fluid center-block" src="https://box.petiko.com.br/images/ra_1000.png" style="max-width: 115px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12">
                <p class="text-muted"><small>BOX.Petiko - Direitos reservados 2021</small></p>
            </div>
        </div>
    </div>
</body>
</html>
