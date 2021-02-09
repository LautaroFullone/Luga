@extends('adminlte::page')
@section('title','Cta. Corriente')

@section('content_header')
    <h1 style="text-align: center;">Cuenta Corriente</h1>
    <hr>
@stop

@section('content')

<div class="row">
    <div style="margin-left: auto; margin-right:auto;" class="col-4">
        <!-- Alerta -->
        <div  class="small-box bg-red">
            <div class="inner">
                <h3>$40.750,00</h3>
                <p>Total a Pagar</p>
            </div>
            <div class="icon">
                <i class="fas fa-hand-holding-usd"></i>
            </div>
        </div>
    </div>

</div>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Pedido N°</th>
        <th scope="col">Fecha</th>
        <th scope="col">Pagos</th>
        <th scope="col">Consumos</th>
        <th scope="col">Vencimiento</th>
        <th scope="col">Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row"><a href="{{ route('carro') }}">1</a></th>
        <td>22/10/2020</td>
        <td>--</td>
        <th><i class="fas fa-dollar-sign"></i>  35.000,00</th>
        <td>22/10/2021</td>
        <th><i class="fas fa-dollar-sign"></i>  35.000,00</th>
      </tr>
      <tr>
        <td scope="row"><a href="#">1</a></th>
        <td>30/10/2020</td>
        <th><i class="fas fa-dollar-sign"></i>  5.000,00</th>
        <td>--</td>
        <td>22/10/2020</td>
        <th><i class="fas fa-dollar-sign"></i>  30.000,00</th>
      </tr>
      <tr>
        <td scope="row"><a href="#">2</a></th>
        <td>5/11/2020</td>
        <td>--</td>
        <th><i class="fas fa-dollar-sign"></i>  25.750,00</th>
        <td>5/11/2021</td>
        <th><i class="fas fa-dollar-sign"></i>  25.750,00</th>
      </tr>
      <tr>
        <td scope="row"><a href="#">1</a></th>
        <td>10/11/2020</td>
        <th><i class="fas fa-dollar-sign"></i>  10.000,00</th>
        <td>--</td>
        <td>22/10/2020</td>
        <th><i class="fas fa-dollar-sign"></i>  20.000,00</th>
      </tr>
      <tr>
        <td scope="row"><a href="#">2</a></th>
        <td>10/11/2020</td>
        <th><i class="fas fa-dollar-sign"></i> 2.000,00</th>
        <td>--</td>
        <td>5/11/2021</td>
        <th><i class="fas fa-dollar-sign"></i>  23.750,00</th>
      </tr>
      <tr>
        <td scope="row"><a href="#">2</a></th>
        <td>25/11/2020</td>
        <th><i class="fas fa-dollar-sign"></i>  5.000,00</th>
        <td>--</td>
        <td>5/11/2021</td>
        <th><i class="fas fa-dollar-sign"></i>  20.750,00</th>
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

