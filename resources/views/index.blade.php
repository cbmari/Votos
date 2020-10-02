
@extends('layout')

@section('content')
<style>
  .btn-group{
  float:right;
  }
  
  td
  {
    display: inline;
  }

</style>
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2>Cadastro de Apoiadores - Intenção de voto. </h2>
      </div>
      <div class="pull-right">
          <a class="btn btn-success" href="{{ route('create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
              </a>
      </div>
  </div>
</div>

@if ($message = Session::get('success'))
  <div class="alert alert-success">
      <p>{{ $message }}</p>
  </div>
@endif

<table class="table table-bordered table-responsive-lg">
  <tr>
      <th>Nome</th>
      <th>Vínculo</th>
      <th>Whatsapp</th>
      <th>Endereço</th>
      <th>Apoio</th>
      <th width="280px">Ações</th>
  </tr>
  
</table>