<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lageevo Covid19 @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('/bootstrap/dist/css/bootstrap.css') }}" />


</head>

    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
            <a class="navbar-brand disabled text-light" href="{{route('samples.index')}}">Lageevo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link disabled text-light">Olá usuário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="#">Sair</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>


    <div class="row container-header mt-5">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" href="{{route('samples.create')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512 512" height="36" viewBox="0 0 512 512" width="36"><g><path d="m446.604 124.392-119.996-119.997c-2.846-2.847-6.735-4.395-10.608-4.395h-210c-24.813 0-45 20.187-45 45v422c0 24.813 20.187 45 45 45h300c24.813 0 45-20.187 45-45v-332c0-4.116-1.743-7.957-4.396-10.608zm-115.604-73.179 68.787 68.787h-53.787c-8.271 0-15-6.729-15-15zm75 430.787h-300c-8.271 0-15-6.729-15-15v-422c0-8.271 6.729-15 15-15h195v75c0 24.813 20.187 45 45 45h75v317c0 8.271-6.729 15-15 15z"/><path d="m346 242h-150c-8.284 0-15 6.716-15 15s6.716 15 15 15h150c8.284 0 15-6.716 15-15s-6.716-15-15-15z"/><path d="m346 302h-150c-8.284 0-15 6.716-15 15s6.716 15 15 15h150c8.284 0 15-6.716 15-15s-6.716-15-15-15z"/><path d="m346 362h-150c-8.284 0-15 6.716-15 15s6.716 15 15 15h150c8.284 0 15-6.716 15-15s-6.716-15-15-15z"/><circle cx="136" cy="257" r="15"/><circle cx="136" cy="317" r="15"/><circle cx="136" cy="377" r="15"/></g></svg>
                            Novo Formulário <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-dark" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Capa_2" enable-background="new 0 0 512 512" height="36" viewBox="0 0 512 512" width="36"><g><g><path d="m45.891 280.16c4.142 0 7.5-3.358 7.5-7.5v-190.41c0-1.432 1.164-2.597 2.596-2.6h.002 363.659.005c1.433.001 2.598 1.167 2.598 2.6v90.41c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-90.41c0-7.021-4.143-13.078-10.104-15.9v-16.423c0-7.021-4.142-13.077-10.102-15.9v-16.425c.001-9.706-7.895-17.602-17.601-17.602h-323.252c-9.706 0-17.602 7.896-17.602 17.602v16.425c-5.96 2.823-10.102 8.879-10.102 15.9v16.426c-5.958 2.823-10.098 8.878-10.098 15.897v190.41c.001 4.142 3.359 7.5 7.501 7.5zm17.598-230.233c0-1.435 1.167-2.602 2.602-2.602h343.456c1.435 0 2.602 1.167 2.602 2.602v14.723h-348.66zm10.102-32.325c0-1.435 1.167-2.602 2.602-2.602h323.252c1.435 0 2.602 1.167 2.602 2.602v14.724h-328.456z"/><path d="m327.775 252.492c-18.207-18.207-42.413-28.233-68.161-28.233s-49.955 10.027-68.161 28.233-28.233 42.413-28.233 68.161 10.027 49.955 28.233 68.161 42.413 28.233 68.161 28.233 49.955-10.027 68.161-28.233 28.233-42.413 28.233-68.161-10.027-49.955-28.233-68.161zm-10.607 125.716c-15.374 15.373-35.813 23.84-57.555 23.84s-42.181-8.467-57.555-23.84c-15.373-15.374-23.84-35.813-23.84-57.555s8.467-42.181 23.84-57.555c15.374-15.373 35.813-23.84 57.555-23.84s42.181 8.467 57.555 23.84c15.373 15.374 23.84 35.813 23.84 57.555s-8.467 42.181-23.84 57.555z"/><path d="m491.621 499.197-34.17-34.17v-91.847c0-4.142-3.358-7.5-7.5-7.5h-12.7v-158.02c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v158.02h-42.062c17.011-45.762 7.162-99.327-29.557-136.046-44.516-44.516-113.791-49.54-163.903-15.086v-110.072c0-4.142-3.358-7.5-7.5-7.5h-101.016c-4.142 0-7.5 3.358-7.5 7.5v125.26c0 4.142 3.358 7.5 7.5 7.5h83.369c-30.901 36.262-38.414 85.748-22.543 128.444h-85.648v-58.02c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v58.02h-12.71c-2 0-3.917.799-5.326 2.219s-2.191 3.345-2.174 5.345l1.12 131.32c.035 4.117 3.382 7.436 7.5 7.436h44.56c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-37.123l-.992-116.32h112.49c5.871 11.154 13.49 21.621 22.859 30.991 25.094 25.094 58.056 37.641 91.019 37.641 20.747 0 41.493-4.975 60.278-14.917l21.562 21.562c1.406 1.407 3.314 2.197 5.303 2.197s3.897-.79 5.303-2.197l3.268-3.269 15.108 15.108-3.268 3.268c-2.929 2.929-2.929 7.678 0 10.606l15.329 15.33h-276.136c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h294.24c.006 0 .01-.001.017-.001 1.914-.004 3.828-.735 5.288-2.196 2.929-2.929 2.929-7.678 0-10.606l-22.828-22.828 32.251-32.251 65.686 65.686c1.464 1.464 3.384 2.197 5.303 2.197s3.839-.732 5.303-2.197c2.93-2.929 2.93-7.679 0-10.607zm-405.908-387.221h86.016v110.26h-86.016zm93.488 289.089c-44.339-44.339-44.339-116.485 0-160.824 22.17-22.169 51.291-33.254 80.412-33.254s58.242 11.084 80.412 33.254c44.339 44.339 44.339 116.485 0 160.824-44.34 44.338-116.485 44.338-160.824 0zm153.875 25.301c6.175-4.295 12.055-9.193 17.556-14.695s10.399-11.381 14.695-17.556l13.682 13.681-32.251 32.251zm32.859 15.717 15.108-15.108 15.108 15.108-15.108 15.108zm44.091-13.875-3.268 3.268-15.108-15.108 3.268-3.269c1.407-1.406 2.197-3.314 2.197-5.303s-.79-3.897-2.197-5.303l-21.562-21.562c.044-.084.091-.167.136-.251h68.96v69.347l-21.819-21.819c-2.929-2.929-7.678-2.929-10.607 0z"/><path d="m397.424 96.976h-183.85c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h183.85c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"/><path d="m404.924 136.801c0-4.142-3.358-7.5-7.5-7.5h-183.85c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h183.85c4.142 0 7.5-3.358 7.5-7.5z"/><path d="m213.575 161.626c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h123.24c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"/></g></g></svg>
                            Exames
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="container">
            <br>
            @yield('content')
        </main>
    </div>


            <footer class="page-footer fixed-bottom text-sm-center text-light bg-success">
                <div class="footer text-center py-3 text-light">
                    <a> Lageevo</a>
                </div>
            </footer>
</body>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>
