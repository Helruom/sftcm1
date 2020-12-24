@extends('padrao_index')
@section('corpo_pagina')
    <div class="col-10 m-auto">
        <h1 class="text-center ">Cadastro de Vendas</h1>
        <div class="mb-2">
            <a href=""><button type="button" class="btn btn-outline-dark">Pesquisar</button></a>
            <a href="{{url('/vendas/venda_criar')}}"><button type="button" class="btn btn-outline-dark">Nova Venda</button></a>
        </div>
        @csrf
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Dada da Venda</th>
                <th scope="col">Usuario</th>
                <th scope="col">Cliente</th>
                <th scope="col">Valor</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($venda as $vendas)
              @php
                  $usuario=$vendas->find($vendas->id)->relationUsuario;
                  $cliente=$vendas->find($vendas->id)->relationCliente;
              @endphp
              <tr>
                <th scope="row">{{$vendas->id}}</th>
                <td>{{$vendas->data_venda}}</td>
                <td>{{$usuario->Nome}}</td>
                <td>{{$cliente->Nome}}</td>
                <td>R$ {{$vendas->valor_venda}}</td>
                <td>
                    <a href="{{url("/vendas/venda_editar/$vendas->id")}}"><button type="button" class="btn btn-outline-dark">Editar</button></a>
                    <a href="{{url("/vendas/$vendas->id")}}" clas="jsDelete"><button type="button" class="btn btn-outline-dark">Excluir</button></a>            
              </tr>
              @endforeach
              <tr>
            </tbody>
          </table>
    </div>
@endsection
@section('rodape_pagina')
  <div class="col-1 m-auto">
    {{$venda->links()}}
  </div>
@endsection