<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .my-wrapper {
            margin-top: 6rem;
        }

        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1;
        }
    </style>
</head>

<body>
    <nav>
        <div class="nav-wrapper teal lighten-2">
            <a href="/" class="brand-logo center">Loan Eligibility Checker</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                <li><a href="/help">Entenda a consulta</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="center my-wrapper">
            <h4>@yield('title')</h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="add-height  valign-wrapper">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
    <footer class="page-footer teal lighten-2">
        <div class="footer-copyright">
            <div class="container">
                © 2023 - Desenvolvido por <a class="grey-text text-lighten-4 right" href="https://github.com/lucioln">Lúcio Noleto</a>
            </div>
        </div>
    </footer>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
