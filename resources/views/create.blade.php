@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Adicionar Pessoa
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('testes.store') }}">
          <div class="form-group">
              @csrf
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" name="nome"/>
          </div>
          <div class="form-group">
              <label for="vinculo">vinculo:</label>
              <textarea rows="1" columns="3" class="form-control" name="vinculo"></textarea>
          </div>
          <div class="form-group">
            <label for="endereco">
                <h6>Endereço:</h6>
            </label>
            <input type="text" name="endereco" id="endereco" class="form-control form-control-sm">
        </div>
        <div class="form-group">
            <label for="whatsapp">
                <h6>Whatsapp:</h6>
            </label>
            <input type="text" name="whatsapp" id="whatsapp" class="form-control form-control-sm">
        </div>    
        <div class="form-group">
          <label for="apoio">
              <h6>Apoio:</h6>
          </label>
          <input type="text" name="apoio" id="apoio" class="form-control form-control-sm">
      </div>
          <button type="submit" class="btn btn-primary">Adicionar</button>
      </form>
  </div>
</div>
@endsection