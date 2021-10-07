<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
@yield('navbar', View::make('template.navbar', ['twitchUrl' => $twitchUrl]))
<div class="container-fluid hero-bg text-center" style="background: url('{{ asset('images/hero-bg.jpg') }}')">
    <h3 class="hero-title">Newsletter do danielzin zika do baile</h3>
    <p class="hero-lead">Fique por dentro das peripécias do menino coração recebendo e-mails exclusivos!</p>
    <a href="{{ $twitchUrl }}" class="btn btn-outline-primary">Clique aqui para se inscrever</a>
</div>

<div class="container">
    <div class="card border-light mb-3 mt-5">
        <div class="card-body" style="padding: 0;">
            <div class="row">
                <div class="col-12 col-md-6 text-center">
                    <img class="img-fluid" width="300" src="{{ asset('images/emote-think.png') }}"
                         style="transform: rotateX(360deg)">
                </div>
                <div class="col-12 col-md-6">
                    <h4 class="card-title mt-5 mb-4">Sobre</h4>
                    <p class="card-text mb-5 p-2">
                        Esse projeto em como principio coletar e-mails de pessoas que seguem o meu trabalho, sendo
                        na Twitch ou no Twitter, para que quando tiver algum tipo de aviso sobre o canal ou qualquer uma
                        das minhas redes você ser o primeiro a saber =)
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
@yield('footer', View::make('template.footer'))
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
