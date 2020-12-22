@extends('padrao_index')
@section('corpo_pagina')
    <div>
        <h1 class="text-center ">Cadastro de Clientes</h1>
        <table class="table table-striped col-7 m-auto">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">E-mail</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($cliente as $clientes)
              <tr>
                <th scope="row">{{$clientes->id}}</th>
                <td>{{$clientes->Nome}}</td>
                <td>{{$clientes->Telefone}}</td>
                <td>{{$clientes->Email}}</td>
              </tr>
              @endforeach
              <tr>
            </tbody>
          </table>
    </div>
@endsection