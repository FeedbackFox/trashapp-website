<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <title>TrashyGo</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/boilerplate.css') }}" rel="stylesheet">

</head>
<body>
<header class="container navcontainer fixed-top">

    <nav class="navbar navbar-expand-lg navbar-dark">

        <a class="navbar-brand" href="/">

            <img src="../images/logo.png"

                alt="TrashyGo Logo">

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"

            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>



        <div class="collapse navbar-collapse" id="navbar-collapse">

            <div class="navbar-nav ml-auto">

                <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>

                <a class="nav-item nav-link active" href="privacy">Privacy <span class="sr-only"></span></a>

            </div>

        </div>

    </nav>

</header>

