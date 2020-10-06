@extends('layout')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nome</td>
          <td>Vinculo</td>
          <td>Endereço</td>
          <td>Whatsapp</td>
          <td>Apoio</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($testes as $cadastro)
        <tr>
            <td>{{$cadastro->id}}</td>
            <td>{{$cadastro->nome}}</td>
            <td>{{$cadastro->vinculo}}</td>
            <td>{{$cadastro->endereco}}</td>
            <td>{{$cadastro->whatsapp}}</td>
            <td>{{$cadastro->apoio}}</td>
            <td><a href="{{ route('testes.edit', $cadastro->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('testes.destroy', $cadastro->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
