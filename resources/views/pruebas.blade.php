@extends('adminlte::page')

@section('title', 'Probando')

@section('content_header')
    <h1 style="text-align: center;">Pruebas</h1>
    <hr>
@stop

@section('content')

    {{ $categoria }}
    {{ $productos }}
    <br>


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
