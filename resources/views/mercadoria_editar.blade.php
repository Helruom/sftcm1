@extends('padrao_index')
@section('corpo_pagina')
<div class="col-9 m-auto">
    <h1 class="text-center ">Cadastro de Mercadorias</h1>
    <h2 class="text-center ">Editar</h2>
    <div class="col-9 m-auto">
        <form name="formEditarMercadoria" id="formEditarMercadoria" method="post" action="{{url("/mercadorias/mercadoria_editar")}}">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$mercadoria->id}}">
            @method('put');
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Mercadoria</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="nome" id="nome" value="{{$mercadoria->nome}}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Fornecedor</label>
                </div>
                <select class="form-control" name="id_fornecedor" id="id_fornecedor">
                    <option value="{{$mercadoria->relationFornecedor->id}}">{{$mercadoria->relationFornecedor->Nome}}</option>
                    @foreach ($fornecedor as $fornecedores)
                        <option value="{{$fornecedores->id}}">{{$fornecedores->Nome}}</option>
                    @endforeach
                </select>
                </select>
              </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Preço</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"  name="preço" id="preço" value="{{$mercadoria->preço}}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default" name="estoque" id="estoque">Estoque</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="estoque" id="estoque" value="{{$mercadoria->nome}}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default" >Descrição</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="descricao" id="descricao" value="{{$mercadoria->nome}}">
            </div>
            <input class="btn btn-outline-dark mt-2" type="submit" value="Salvar">
            <a href="/mercadorias"><button type="button" class="btn btn-outline-dark mt-2">Voltar</button></a>
        </form>
    </div>
</div>
@endsection