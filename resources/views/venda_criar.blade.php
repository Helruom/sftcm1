@extends('padrao_index')
@section('corpo_pagina')
    <div class="col-9 m-auto">
        <h1 class="text-center ">Cadastro de Vendas</h1>
        <div class="col-9 m-auto">
            <form name="formCadastrarVenda" id="formCadastrarVenda" method="post" action="{{url('/Vendas/nova')}}">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Data da Venda</span>
                    </div>
                    <input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="dataVenda" id="dataVenda" >
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Usuario</label>
                    </div>
                    <select class="form-control" name="id_usuario" id="id_usuario">
                        @foreach ($usuario as $usuarios)
                            <option value="{{$usuarios->id}}">{{$usuarios->Nome}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Cliente</label>
                    </div>
                    <select class="form-control" name="id_cliente" id="id_cliente">
                        @foreach ($cliente as $clientes)
                            <option value="{{$clientes->id}}">{{$clientes->Nome}}</option>
                        @endforeach
                    </select>
                  </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Observacao</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"  name="observacao" id="observacao">
                </div>
                <input class="btn btn-outline-dark mt-2" type="submit" value="Salvar">
                <a href="/Vendas"><button type="button" class="btn btn-outline-dark mt-2">Voltar</button></a>
            </form>
        </div>
    </div>
@endsection

