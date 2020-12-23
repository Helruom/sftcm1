@extends('padrao_index')
@section('corpo_pagina')
    <div class="col-9 m-auto">
        <h1 class="text-center ">Cadastro de Clientes</h1>
        <div class="mb-2">
          <a href=""><button type="button" class="btn btn-outline-dark">Pesquisar</button></a>
          <a href=""><button type="button" class="btn btn-outline-dark">Novo Cliente</button></a>
        </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($cliente as $clientes)
              <tr>
                <th scope="row">{{$clientes->id}}</th>
                <td>{{$clientes->Nome}}</td>
                <td>{{$clientes->Telefone}}</td>
                <td>{{$clientes->Email}}</td>
                <td>
                  <a href="{{url('view'.$clientes->id)}}"><button type="button" class="btn btn-outline-dark">Editar</button></a>
                  <a href=""><button type="button" class="btn btn-outline-dark">Excluir</button></a>            
                </tr>
              </tr>
              @endforeach
              <tr>
            </tbody>
          </table>
    </div>
@endsection