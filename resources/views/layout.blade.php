<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ url('assets/boot/css/bootstrap.min.css') }}">


    <head>

        <title>Layout</title>
    </head>

<body>
   
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">Intenções de Votos</a>
    </nav>
    <div class="container">
        @yield('conteudo')
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>

</body>

</html>
