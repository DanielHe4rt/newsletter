<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link " href="/">Home
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                @auth()
                    <li class="nav-item">
                        <a class="nav-link active" href="/dashboard">Dashboard
                        </a>
                    </li>
                @endauth
            </ul>
            <ul class="navbar-nav mr-auto">
                @auth()
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Olá {{ auth()->user()->username }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Sair</a>
                    </li>
                @endauth
                @guest()
                    <li class="nav-item">
                        <a href="{{ $twitchUrl ?? '' }}" type="button" class="btn btn-outline-primary">Acessar com a Twitch</a>
                    </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>

