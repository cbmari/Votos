@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<html>
  <head>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Cadastro
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
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
                <form method="post" action="{{ route('votos.store') }}">
                    <div class="form-group">
                        @csrf
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome"/>
                    </div>
                      <label for="vinculo">
                          <h6>Vínculo:</h6>
                      </label>
                      <input type="text" name="vinculo" id="vinculo" class="form-control form-control-sm">
                  </div>
                  <div class="form-group">
                     
                  <div class="form-group">
                    <label for="whatsapp">
                        <h6>Whatsapp:</h6>
                    </label>
                    <input type="text" name="whatsapp" id="whatsapp" class="form-control form-control-sm">
                </div>
                  <div class="form-group">
                    <label for="endereco">
                        <h6>Endereço:</h6>
                    </label>
                    <input type="text" name="endereco" id="endereco" class="form-control form-control-sm">
                </div> 
                <div class="form-group">
                    <label for="adress">
                        <h6>Apoio:</h6>
                    </label>
                    <input type="text" name="apoio" id="apoio" class="form-control form-control-sm">
                  </div>

              <button type="submit" class="btn btn-primary">Adicionar</button>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                      <span aria-hidden="true">&times;</span>
                </form>
            </div>
          </div>
          </div>
          </div>
        </div>
  </head>
  <body>
   
  </body>
</html>

  @endsection