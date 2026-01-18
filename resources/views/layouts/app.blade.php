<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema de Produtos')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">

    <h1>Sistema de Produtos</h1>

    <hr>

    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert-error">
            {{ session('error') }}
        </div>
    @endif

    @yield('content')

</div>

</body>
</html>
