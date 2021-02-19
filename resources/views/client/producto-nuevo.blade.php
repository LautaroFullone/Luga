@extends('adminlte::page')

@section('title', 'Administracion')

@section('content_header')
    <h1 style="text-align: center">Nuevo Producto</h1>
    <hr>
@stop

@section('content')

<div class="contenedor">

        <form action="{{ route('producto.save') }}" method="post">
            @csrf
            <div class="row-1">
                <label for="title">Titulo</label>
                <label for="price">Precio</label>
            </div>
            <div class="row-1">
                <input type="text" name="title" class="form-control" placeholder="Titulo" required>
                <input type="number" name="price" class="form-control"placeholder="Precio" required>

            </div>
            <!--<div class="precio">
                <input type="number" name="price" placeholder="Price" required>
            </div>

            <div class="descripcion">
                <textarea name="description" placeholder="Descripcion" required></textarea>

            </div>

            <div class="categoria">
                <input type="number" name="id_category" placeholder="Categoria" >
            </div>

            <button class="btn btn-outline-luga" type="submit">Enviar</button> -->
        </form>
</div>


@stop

@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css">-->
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
@stop

@section('js')

@stop
