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
                <!-- Salvar o cabeçalho da venda e ficar na mesma pagina-->
                <input class="btn btn-outline-dark mt-2" type="submit" value="Salvar">
                <a href="/Vendas"><button type="button" class="btn btn-outline-dark mt-2">Voltar</button></a>
            </form>
        </div>
    </div>
@endsection
@section('sub_corpo_pagina')
    <form action="">
      <div class="form-group row col-auto m-auto">
        <div class="col-auto m-auto">
          <h3 class="text-center">Mercadorias</h3>
          <!--Adicionar mercadorias a venda e ficar na mesma pagina e atualizar a exibição da tabela de mercadorias -->




          <!--Exibir as mercadorias da venda em uma tabela apos inseridos -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Iten</th>
                <th scope="col">Quantiade</th>
                <th scope="col">Preço</th>
                <th scope="col">Total Mercadoria</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">                    
                  <select class="form-control" name="id_mercadoria" id="id_mercadoria">
                    @foreach ($vMercadorias as $vMercadorias)
                        <option value="{{$vMercadorias->id}}">{{$vMercadorias->Nome}}</option>
                    @endforeach
                  </select>
              </th>
              </tr>
            </tbody>
          </table>
        </div>
      </div> 
    </form>

    <div class="col-1 m-auto">
      {{$vMercadorias->links()}}
    </div>
@endsection

