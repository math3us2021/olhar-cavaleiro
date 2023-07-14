<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Fonte do Goole -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- Css Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Css aplication -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Script js -->
    <script src="/js/scripts.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/dashboard" class="navbar-brand">
                <img src="/img/horseD.png" alt="HDC ">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/events" class="nav-link">Eventos</a>
                </li>
                @auth
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout"
                               class="nav-link"
                               onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                Sair
                            </a>
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Cadastrar</a>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</header>
<main>
    <div class="container-fluid">
        <div class="row">
            @if(session('msg'))
                <p class="msg">{{ session('msg') }}</p>
            @endif
            @yield('content')
        </div>
    </div>
</main>
<footer>
    <p>Olhar de Cavaleiro &copy; 2023</p>
</footer>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
