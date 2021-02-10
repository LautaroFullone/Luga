@extends('adminlte::page')

@section('title', 'Mis Pedidos')

@section('content_header')
    <h1 style="text-align: center;">Mis pedidos</h1>
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
        <th scope="col">Operaciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">1</th>
        <td>22/10/2020</td>
        <td>
             <a class="btn btn-warning" href="">En Preparacion</a>
        </td>
        <th><i class="fas fa-dollar-sign"></i>  21.689,80</th>
        <td>
            <a href="{{ route('carro') }}" class="btn btn-outline-luga" >Ver Carro</a>
        </td>
      </tr>
      <tr>
        <td scope="row">2</th>
        <td>08/02/2021</td>
        <td>
            <a class="btn btn-success" href="">Entregado</a>
        </td>
        <th><i class="fas fa-dollar-sign"></i> 10.205,00</th>
        <td>
            <a href="{{ route('carro') }}" class="btn btn-outline-luga" >Ver Carro</a>
        </td>
      </tr>
      <tr>
        <td scope="row">3</th>
        <td>9/12/2020</td>
        <td>
            <a class="btn btn-danger" href="">Cancelado</a>
        </td>
        <th><i class="fas fa-dollar-sign"></i> 32.545,80</th>
        <td>
            <a href="{{ route('carro') }}" class="btn btn-outline-luga" >Ver Carro</a>
        </td>
      </tr>
      <tr>
        <td scope="row">4</th>
        <td>10/02/2021</td>
        <td>
            <a class="btn btn-primary" href="">En Proceso</a>
        </td>
        <th><i class="fas fa-dollar-sign"></i> 26.314,85</th>
        <td>
            <a href="{{ route('carro') }}" class="btn btn-outline-luga" >Ver Carro</a>
        </td>
      </tr>
    </tbody>
</table>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
