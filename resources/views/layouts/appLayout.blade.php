<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontaswsome/font-awesome.min.css') }}">
    <script src="{{ asset('assets/jquery.min.js') }}"></script>
    <title>Sistema de Privado</title>
</head>
<body>
    @include('userbar')
    @yield('painel')

    <script src="{{ asset('assets/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

