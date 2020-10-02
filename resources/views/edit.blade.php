@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar cadastros
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
      <form method="post" action="{{ route('edit', $votos->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <div class="form-group">
                @csrf
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" value="{{ $voto->nome }}"/>
            </div>
            <div class="form-group">
              <label for="vinculo">
                  <h6>Vínculo:</h6>
              </label>
              <input type="text" name="vinculo" id="vinculo" class="form-control form-control-sm" value="{{ $voto->vinculo }}">
          </div>                               
          <div class="form-group">
            <label for="whatsapp">
                <h6>Whatsapp:</h6>
            </label>
            <input type="text" name="whatsapp" id="whatsapp" class="form-control form-control-sm" value="{{ $voto->whatsapp }}">
        </div>
          <div class="form-group">
            <label for="endereco">
                <h6>Endereço:</h6>
            </label>
            <input type="text" name="endereco" id="endereco" class="form-control form-control-sm" value="{{ $voto->endereco }}">
        </div>                              
        <div class="form-group">
            <label for="adress">
                <h6>Apoio:</h6>
            </label>
            <input type="text" name="apoio" id="apoio" class="form-control form-control-sm" value="{{ $voto->apoio }}">
        </div>
          </div>
          <button type="submit" class="btn btn-primary">Atualizar</button>
      </form>
  </div>
</div>
</div>   
@endsection