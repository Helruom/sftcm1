@extends('padrao_index')
@section('corpo_pagina')
<div class="col-9 m-auto">
    <h1 class="text-center ">Cadastro de Usuarios</h1>
    <h2 class="text-center ">Editar</h2>
    <div class="col-9 m-auto">
        <form name="formEditarUsuario" id="formEditarUsuario" method="post" action="{{url("/usuarios/usuario_editar")}}">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$usuario->id}}">
            @method('put');
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Usuario</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="nome" id="nome" value="{{$usuario->Nome}}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Senha</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"  name="senha" id="senha" value="{{$usuario->Senha}}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">E-mail</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="email" id="email" value="{{$usuario->Email}}">
            </div>
            <input class="btn btn-outline-dark mt-2" type="submit" value="Salvar">
            <a href="/usuarios"><button type="button" class="btn btn-outline-dark mt-2">Voltar</button></a>
        </form>
    </div>
</div>
@endsection