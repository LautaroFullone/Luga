@extends('adminlte::page')
@section('title','Cta. Corriente')

@section('content_header')
    <h1 style="text-align: center;">Mis Pagos</h1>
    <hr>
@stop

@section('content')

<div class="row">
    <div style="margin-left: auto; margin-right:auto;" class="col-4">
        <!-- Alerta -->
        <div  class="small-box bg-success">
            <div class="inner">
                <h3>$22.000,00</h3>
                <p>Total de Pagos</p>
            </div>
            <div class="icon">
                <i class="fas fa-money-check-alt"></i>
            </div>
        </div>
    </div>

</div>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Pago N°</th>
        <th scope="col">Fecha</th>
        <th scope="col">Monto</th>
        <th scope="col"colspan="2">Detalle</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row">1</th>
            <td>30/10/2020</td>
            <th><i class="fas fa-dollar-sign"></i>  5.000,00</th>
            <td colspan="2">detalleeeeeeeeeeeeeeeee</td>
        </tr>
        <tr>
            <td scope="row">2</th>
            <td>10/11/2020</td>
            <th><i class="fas fa-dollar-sign"></i>  10.000,00</th>
            <td colspan="2">detalleeeeeeeeeeeeeeeee</td>
        </tr>
        <tr>
            <td scope="row">3</th>
            <td>10/11/2020</td>
            <th><i class="fas fa-dollar-sign"></i>  2.000,00</th>
            <td colspan="2">detalleeeeeeeeeeeeeeeee</td>
        </tr>
        <tr>
            <td scope="row">4</th>
            <td>25/11/2020</td>
            <th><i class="fas fa-dollar-sign"></i>  5.000,00</th>
            <td colspan="2">detalleeeeeeeeeeeeeeeee</td>
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

