<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
    <title>Shopshop</title>
</head>
<body>
    <div class="row">
        <div class="col"><a href="/mercadorias">Mercadorias</a></div>
        <div class="col"><a href="/fornecedores">Fornecedores</a></div>
        <div class="col"><a href="/clientes">Clientes</a></div>
        <div class="col"><a href="/vendas">Vendas</a></div>
        <div class="col"><a href="/usuarios">Usuarios</a></div>
      </div>
    @yield('corpo_pagina')
    <script src="{{asset('jquery.js')}}"></script>
    <script src="{{asset('bootstrap.js')}}"></script>
</body>
<footer>
    <p>aqui o rodape</p>
</footer>
</html>
