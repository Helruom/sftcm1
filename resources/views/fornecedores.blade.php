@extends('padrao_index')
@section('corpo_pagina')
    <div>
        <h1 class="text-center ">Cadastro de fornecedores</h1>
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
              @foreach ($fornecedor as $fornecedores)
              <tr>
                <th scope="row">{{$fornecedores->id}}</th>
                <td>{{$fornecedores->Nome}}</td>
                <td>{{$fornecedores->Telefone}}</td>
                <td>{{$fornecedores->Email}}</td>
              </tr>
              @endforeach
              <tr>
            </tbody>
          </table>
    </div>
@endsection