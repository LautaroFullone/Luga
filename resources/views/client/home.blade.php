@extends('adminlte::page')

@section('title', 'Administracion')

@section('content_header')
    <h1 style="text-align: center">Pagina Principal</h1>
    <hr>
@stop

@section('content')

<div style="margin: auto" class="col-6">
    <div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-exclamation-triangle"></i> Atencion!</h5>
    Este sitio web se encuentra actualmente en su etapa de produccion, para mas informacion
    consulte con sus desarrolladores. <br> <a href="http://www.temberweb.com/">Contactenos</a>

    </div>
</div>



@stop

@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css">-->
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
@stop

@section('js')

@stop
