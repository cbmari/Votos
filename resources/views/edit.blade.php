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
      <form method="post" action="{{ route('votos.update', $cadastros->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <div class="form-group">
                @csrf
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" value="{{ $cadastro->nome }}/>
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" class="form-control" name="sobrenome" value="{{ $cadastro->sobrenome }}>
            </div>
            <div class="form-group">
              <label for="vinculo">
                  <h6>Vínculo:</h6>
              </label>
              <input type="text" name="vinculo" id="vinculo" class="form-control form-control-sm" value="{{ $cadastro->vinculo }}>
          </div>
          <div class="form-group">
              <label for="segmento">
                  <h6>Segmento:</h6>
              </label>
              <input type="text" name="segmento" id="segmento" class="form-control form-control-sm" value="{{ $cadastro->segmento}}">
          </div>
          <div class="form-group">
            <label for="whatsapp">
                <h6>Whatsapp:</h6>
            </label>
            <input type="text" name="whatsapp" id="whatsapp" class="form-control form-control-sm" value="{{ $cadastro->whatsapp }}>
        </div>
          <div class="form-group">
            <label for="rua">
                <h6>Rua:</h6>
            </label>
            <input type="text" name="rua" id="rua" class="form-control form-control-sm" value="{{ $cadastro->rua }}>
        </div>
         <div class="form-group">
            <label for="num">
                <h6>Número:</h6>
            </label>
            <input type="text" name="num" id="num" class="form-control form-control-sm" value="{{ $cadastro->num }}>
        </div>
        <div class="form-group">
            <label for="bairro">
                <h6>Bairro:</h6>
            </label>
            <input type="text" name="bairro" id="bairro" class="form-control form-control-sm" value="{{ $cadastro->bairro }}>
        </div>
        <div class="form-group">
            <label for="adress">
                <h6>Apoio:</h6>
            </label>
            <input type="text" name="apoio" id="apoio" class="form-control form-control-sm" value="{{ $cadastro->apoio }}>
        </div>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection