@extends('layout')

@section('content')
    <style>
        .acoes {
            float: right;
            margin: 5px;
        }

        td {
            ;
        }

    </style>
    <?php $cadastros = []; ?>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Cadastro de Apoiadores - Intenção de voto. </h2>
        </div>
        <div class="acoes">
            <a class="btn btn-success" data-toggle="modal" data-target="#cadastro"> <i class="fas fa-plus-circle"></i>
            </a>
            <a class="btn btn-info" data-toggle="modal" data-target="#editar"> <i class="fas fa-user-edit"></i>
            </a>
            <a class="btn btn-danger" data-toggle="modal" data-target="#excluir"><i class="fas fa-trash"></i>
            </a>
        </div>
        <!-- Modal cadastros -->
        <div class="modal fade" id="cadastro" tabindex="-1" aria-labelledby="cadastroModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cadastroModalLabel">Cadastro</h5>
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal edit -->
        <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Editar</h5>
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
                            <form method="post" action="{{ route('votos.update', $votos->id) }}">

                                <div class="form-group">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        @csrf
                                        <label for="nome">Nome:</label>
                                        <input type="text" class="form-control" name="nome" value="{{ $votos->nome }}" />
                                    </div>
                                    <div class=" form-group">
                                        <label for="vinculo">
                                            <h6>Vínculo:</h6>
                                        </label>
                                        <input type="text" name="vinculo" id="vinculo" class="form-control form-control-sm"
                                            value="{{ $votos->vinculo }}>
                                        </div>                               
                                        <div class=" form-group">
                                        <label for="whatsapp">
                                            <h6>Whatsapp:</h6>
                                        </label>
                                        <input type="text" name="whatsapp" id="whatsapp"
                                            class="form-control form-control-sm" value="{{ $votos->whatsapp }}">
                                    </div>
                                    <div class=" form-group">
                                        <label for="endereco">
                                            <h6>Endereço:</h6>
                                        </label>
                                        <input type="text" name="endereco" id="endereco"
                                            class="form-control form-control-sm" value="{{ $votos->endereco }}">
                                    </div>
                                    <div class=" form-group">
                                        <label for="adress">
                                            <h6>Apoio:</h6>
                                        </label>
                                        <input type="text" name="apoio" id="apoio" class="form-control form-control-sm"
                                            value="{{ $votos->apoio }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div>
                    <table class="table table-bordered table-responsive-lg">
                        <tr>
                            <th>Nome</th>
                            <th>Vínculo</th>
                            <th>Whatsapp</th>
                            <th colspan="2">Endereço</th>
                            <th width="10">Apoio</th>
                        </tr>
                    </table>
                    @foreach ($votos as $voto)
                        <tr>
                            <td>{{ $voto->nome }}</td>
                            <td>{{ $voto->vinculo }}</td>
                            <td>{{ $voto->whatsapp }}</td>
                            <td>{{ $voto->endereco }}</td>
                            <td>{{ $voto->apoio }}</td>
                        </tr>
                    @endforeach
                </div>

                </html>

            @endsection
