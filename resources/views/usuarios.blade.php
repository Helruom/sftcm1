@extends('padrao_index')
@section('corpo_pagina')
<div class="col-8 m-auto">
  <h1 class="text-center ">Cadastro de Usuarios</h1>
  <div class="mb-2">
      <a href=""><button type="button" class="btn btn-outline-dark">Pesquisar</button></a>
      <a href="{{url('/usuarios/usuario_criar')}}"><button type="button" class="btn btn-outline-dark">Novo Usuario</button></a>
  </div>
  @csrf
  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nome</th>
          <th scope="col">Senha</th>
          <th scope="col">E-mail</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($usuario as $usuarios)
        <tr>
          <th scope="row">{{$usuarios->id}}</th>
          <td>{{$usuarios->Nome}}</td>
          <td>#######</td>
          <td>{{$usuarios->Email}}</td>
          <td>
            <a href="{{url("/usuarios/usuario_editar/$usuarios->id")}}"><button type="button" class="btn btn-outline-dark">Editar</button></a>
            <a href="{{url("/usuarios/$usuarios->id")}}" clas="jsDelete"><button type="button" class="btn btn-outline-dark">Excluir</button></a>            
          </tr>
        </tr>
        @endforeach
        <tr>
      </tbody>
    </table>
</div>
@endsection
@section('rodape_pagina')
  <div class="col-1 m-auto">
    {{$usuario->links()}}
  </div>
@endsection