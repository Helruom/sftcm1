@extends('padrao_index')
@section('corpo_pagina')
<div class="col-9 m-auto">
    <h1 class="text-center ">Cadastro de Fornecedores</h1>
    <h2 class="text-center ">Editar</h2>
    <div class="col-9 m-auto">
        <form name="formEditarFornecedor" id="formEditarFornecedor" method="post" action="{{url("/fornecedores/fornecedor_editar")}}">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$fornecedor->id}}">
            @method('put');
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Fornecedor</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="nome" id="nome" value="{{$fornecedor->Nome}}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Telefone</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"  name="telefone" id="telefone" value="{{$fornecedor->Telefone}}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">E-mail</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="email" id="email" value="{{$fornecedor->Email}}">
            </div>
            <input class="btn btn-outline-dark mt-2" type="submit" value="Salvar">
            <a href="/fornecedores"><button type="button" class="btn btn-outline-dark mt-2">Voltar</button></a>
        </form>
    </div>
</div>
@endsection