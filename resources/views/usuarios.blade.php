@extends('padrao_index')
@section('corpo_pagina')
    <div>
        <h1 class="text-center ">Cadastro de usuarios</h1>
        <table class="table table-striped col-7 m-auto">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Senha</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($usuario as $usuarios)
              <tr>
                <th scope="row">{{$usuarios->id}}</th>
                <td>{{$usuarios->Nome}}</td>
                <td>{{$usuarios->Email}}</td>
                <td>*******</td>
              </tr>
              @endforeach
              <tr>
            </tbody>
          </table>
    </div>
@endsection