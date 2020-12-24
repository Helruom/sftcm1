@extends('padrao_index')
@section('corpo_pagina')
    <div class="col-9 m-auto">
        <h1 class="text-center ">Cadastro de Fornecedores</h1>
        <div class="col-9 m-auto">
            <form name="formCadastrarFornecedor" id="formCadastrarFornecedor" method="post" action="{{url('/fornecedores/nova')}}">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Fornecedor</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="Nome" id="Nome">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Telefone</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"  name="Telefone" id="Telefone">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">E-mail</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="Email" id="Email">
                </div>
                <input class="btn btn-outline-dark mt-2" type="submit" value="Salvar">
                <a href="/fornecedores"><button type="button" class="btn btn-outline-dark mt-2">Voltar</button></a>
            </form>
        </div>
    </div>
@endsection