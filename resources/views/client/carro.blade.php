@extends('adminlte::page')

@section('title', 'Carro')

@section('content_header')
    <h1 style="text-align: center;">Carro de Compras</h1>
    <hr>
@stop

@section('content')

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Pedido N°</th>
        <th scope="col">Fecha</th>
        <th scope="col">Estado</th>
        <th scope="col">Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">1</th>
        <td>19/01/2021</td>
        <td>
            <a class="btn btn-success" href="">Entregado</a>
        </td>
        <th><i class="fas fa-dollar-sign"></i> 21.200,50</th>
      </tr>
    </tbody>
  </table>

<br><br>

  <table class="table">
    <thead class="thead-luga">
      <tr>
        <th scope="col">Codigo Producto</th>
        <th scope="col">Imagen</th>
        <th scope="col">Nombre</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">#FT785T8</th>
        <td>
            <img src="{{ asset('images/web/Samsung.jpg') }}" width="100px" height="100px">
        </td>
        <td>Samgung A10 2020</td>
        <td>2</td>
        <td><i class="fas fa-dollar-sign"></i> 20.000,00</td>
      </tr>
      <tr>
        <td scope="row">#KUO455O4</th>
        <td>
            <img src="{{ asset('images/web/vidrio.jpg') }}" width="100px" height="100px">
        </td>
        <td>Vidrio Templado Samsung A10</td>
        <td>2</td>
        <td><i class="fas fa-dollar-sign"></i> 350,00</td>
      </tr>
      <tr>
        <td scope="row">#ZSA281B4</th>
        <td>
            <img src="{{ asset('images/web/funda.jpg') }}" width="100px" height="100px">
        </td>
        <td>Funda Celular Samgung A10 2020</td>
        <td>1</td>
        <td><i class="fas fa-dollar-sign"></i> 850,00</td>
      </tr>
    </tbody>
  </table>


@stop

@section('css')
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
