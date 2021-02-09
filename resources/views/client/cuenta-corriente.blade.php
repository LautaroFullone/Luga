@extends('adminlte::page')
@section('title','Cta. Corriente')

@section('content_header')
    <h1 style="text-align: center;">Cuneta Corriente</h1>
    <hr>
@stop

@section('content')

<!-- small box -->
<div class="small-box bg-red">
    <div class="inner">
      <h3>65</h3>

      <p>Unique Visitors</p>
    </div>
    <div class="icon">
      <i class="ion ion-pie-graph"></i>
    </div>
    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>

@stop

@section('css')

<link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
@stop

@section('js')
<script>
    console.log('Hi!');

</script>
@stop

