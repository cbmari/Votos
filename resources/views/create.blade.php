@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
        .jumbotron h1{
          text-align: center;
        }
        .jumbotron button{
          margin: 20px;
          padding:5px;
        }

    </style>
    <html>
    </form>
    <div class="container">
      <form method="post" action="{{ route('votos.store') }}">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Cadastro de Apoiadores</h1>
            <div class="form-group">
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" id="nome">
            </div>
            <div class="form-group">
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" id="nome">
            </div>
            <div class="form-group">
              <label for="vinculo">Vínculo:</label>
              <input type="text" class="form-control" id="vinculo">
            </div>
            <div class="form-group">
              <label for="whatsapp">Whatsapp:</label>
              <input type="text" class="form-control" id="whatsapp">
            </div>
            <div class="form-group">
              <label for="endereco">Endereço:</label>
              <input type="text" class="form-control" id="endereco">
            </div>
            <div class="form-group">
              <label for="apoio">Apoio:</label>
              <input type="text" class="form-control" id="apoio">
            </div>
            <button type="submit" class="btn btn-primary">Adicionar</button>
          </div>
        </div>       
    </form>

    </div>
   
    </html>

@endsection
