@extends('padrao_index')
@section('corpo_pagina')
    <div class="col-9 m-auto">
        <h1 class="text-center ">Cadastro de Mercadorias</h1>
        <div class="col-9 m-auto">
            <form name="formCadastrarMercadoria" id="formCadastrarMercadoria" method="post" action="{{url('/mercadorias/nova')}}">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default" name="nome" id="nome">Mercadoria</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Fornecedor</label>
                    </div>
                    <select class="form-control" name="id_fornecedor" id="id_fornecedor">
                        @foreach ($fornecedor as $fornecedores)
                            <option value="{{$fornecedores->id}}">{{$fornecedores->Nome}}</option>
                        @endforeach
                    </select>
                    </select>
                  </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default" name="preço" id="preço">Preço</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default" name="estoque" id="estoque">Estoque</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default" name="descricao" id="descricao">Descrição</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                <input class="btn btn-outline-dark mt-2" type="submit" value="Salvar">
            </form>
        </div>
    </div>
@endsection