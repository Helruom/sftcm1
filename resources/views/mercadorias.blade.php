@extends('padrao_index')
@section('corpo_pagina')
    <div class="col-9 m-auto">
        <h1 class="text-center ">Cadastro de Mercadorias</h1>
        <div class="mb-2">
            <a href=""><button type="button" class="btn btn-outline-dark">Pesquisar</button></a>
            <a href=""><button type="button" class="btn btn-outline-dark">Nova Mercadoria</button></a>
        </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Preço</th>
                <th scope="col">Descrição</th>
                <th scope="col">Estoque</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($mercadoria as $mercadorias)
              @php
                  $fornecedor=$mercadorias->find($mercadorias->id)->relationFornecedor;
              @endphp
              <tr>
                <th scope="row">{{$mercadorias->id}}</th>
                <td>{{$mercadorias->nome}}</td>
                <td>{{$fornecedor->Nome}}</td>
                <td>{{$mercadorias->preço}}</td>
                <td>{{$mercadorias->descricao}}</td>
                <td>{{$mercadorias->estoque}}</td>
                <td>
                    <a href="{{url('/mercadorias/'.$mercadorias->id)}}"><button type="button" class="btn btn-outline-dark">Editar</button></a>
                    <a href=""><button type="button" class="btn btn-outline-dark">Excluir</button></a>            
              </tr>
              @endforeach
              <tr>
            </tbody>
          </table>
    </div>
@endsection