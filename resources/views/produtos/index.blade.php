@extends('layouts.template')
@section('title','Produtos')
@section('content',)

<div class="container">

<a href="{{route('produtos.inserir')}}" class="btn btn-primary my-4" type="button">Novo Produtos</a> 
<!-- DataTales Example -->
<div class="card shadow mb-4">

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Descricão</th>
          <th>Preço</th>
          <th>Ações</th>
        </tr>
      </thead>

      <tbody>
      @foreach ($produtos as $produto)
        <tr>
        <td>{{$produto->id}}</td>
        <td>{{$produto->nome}}</td>
        <td>{{$produto->descricao}}</td>
        <td>{{$produto->preco}}</td>
        <td>
        <a href="{{route('produtos.descricao', $produto->id)}}"><i class="fas fa-eye text-primary mx-2"></i></a>
        <a href="{{route('produtos.descricao', $produto->id)}}"><i class="fas fa-pen text-success mx-2"></i></a>
        <a href="{{route('produtos.descricao', $produto->id)}}"><i class="fas fa-trash-alt text-danger mx-2"></i></a>
        </td>
        </tr>
      @endforeach
      </tbody>
  </table>
</div>
</div>
</div>
    
@endsection
</div>