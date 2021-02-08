@extends('adminlte::page')
@section('content_header')
@php
    $user=Auth::user();
    echo '<pre>';
    var_dump($user);
    echo '</pre>';

@endphp



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
