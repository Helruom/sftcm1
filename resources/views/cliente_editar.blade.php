@extends('padrao_index')
@section('corpo_pagina')
<div class="col-9 m-auto">
    <h1 class="text-center ">Cadastro de Clientes</h1>
    <h2 class="text-center ">Editar</h2>
    <div class="col-9 m-auto">
        <form name="formEditarcliente" id="formEditarcliente" method="post" action="{{url("/clientes/cliente_editar")}}">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$cliente->id}}">
            @method('put');
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Cliente</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="nome" id="nome" value="{{$cliente->Nome}}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Telefone</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"  name="telefone" id="telefone" value="{{$cliente->Telefone}}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">E-mail</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="email" id="email" value="{{$cliente->Email}}">
            </div>
            <input class="btn btn-outline-dark mt-2" type="submit" value="Salvar">
            <a href="/clientes"><button type="button" class="btn btn-outline-dark mt-2">Voltar</button></a>
        </form>
    </div>
</div>
@endsection