<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Lageevo Covid19 @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('/bootstrap/dist/css/bootstrap.css') }}" />

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand disabled">Lageevo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link disabled">Olá usuário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sair</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<main class="container">
    <br>
    @yield('content')
</main>

<footer class="page-footer">
    <div class="footer text-center py-3">
        <a> Lageevo</a>
    </div>
</footer>


</body>
</html>
