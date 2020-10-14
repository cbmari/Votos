@extends('layout')

@section('conteudo')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Corona Virus Data
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
      <form method="post" action="{{ route('testes.update', $testes->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" name="nome" value="{{ $testes->nome }}"/>
          </div>
          <div class="form-group">
              <label for="vinculo">Vinculo :</label>
              <textarea rows="1" columns="5" class="form-control" name="vinculo">{{ $testes->vinculo }}</textarea>
          </div>
          <div class="form-group">
              <label for="endereco">Endereço :</label>
              <input type="text" class="form-control" name="endereco" value="{{ $testes->endereco }}"/>
          </div>
          <div class="form-group">
            <label for="whatsapp">Whatsapp :</label>
            <input type="text" class="form-control" name="whatsapp" value="{{ $testes->whatsapp }}"/>
        </div>
        <div class="form-group">
            <label for="apoio">Apoio :</label>
            <input type="text" class="form-control" name="apoio" value="{{ $testes->apoio }}"/>
        </div>
          <button type="submit" class="btn btn-primary">Atualizar</button>
      </form>
  </div>
</div>
@endsection