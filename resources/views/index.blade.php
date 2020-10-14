@extends('layout')
@section('conteudo')
    <style>
        .uper {
            margin-top: 40px;
        }

    </style>
    <div class="uper">
        @if (session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table table-striped" id="dataTable">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Vinculo</td>
                    <td>Endereço</td>
                    <td>Whatsapp</td>
                    <td>Apoio</td>
                    <td colspan="2">Ações</td>
                </tr>
            </thead>
            <tbody>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('testes.create') }}" title="Create a project"><i class="far fa-plus-square"></i></a>
            </div>
                @foreach ($testes as $cadastro)
                    <tr>
                        <td>{{ $cadastro->id }}</td>
                        <td>{{ $cadastro->nome }}</td>
                        <td>{{ $cadastro->vinculo }}</td>
                        <td>{{ $cadastro->endereco }}</td>
                        <td>{{ $cadastro->whatsapp }}</td>
                        <td>{{ $cadastro->apoio }}</td>
                        <td><a href="{{ route('testes.edit', $cadastro->id) }}" class="btn btn-primary">Editar</a></td>
                        <td>
                            <form action="{{ route('testes.destroy', $cadastro->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Excluir</button>
                            </form>
                        </td>
                    </tr>                   
                        @csrf
                @endforeach
            </tbody>
        </table>
        <div>

            
        @endsection
