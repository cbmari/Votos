
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
<div class="card uper">
  <div class="card-header">
    <h4>Cadastro de Apoiadores - Intenção de voto.</h4>
    <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-secondary">Editar</button>
      <button type="button" class="btn btn-secondary">Excuir</button>
  </div>
  </div>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Vínculo</th>
        <th scope="col"> Whatsapp</th>
        <th colspan="2" >Endereço</th>  
        <th scope="col" width="10">Apoio</th>                     
      </tr>
    </tbody> 
    </thead>
  </table>
<div>

  <body>
    <!-- Chart's container -->
    <div id="chart" style="height: 300px;"></div>
    <!-- Charting library -->
    <script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>
    <!-- Your application script -->
    <script>
      const chart = new Chartisan({
        el: '#chart',
        url: 'https://chartisan.dev/chart/example.json',
        // You can also pass the data manually instead of the url:
        // data: { ... }
      })
    </script>
  </body>
</html>
@endsection