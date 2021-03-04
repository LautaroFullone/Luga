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
                <label for="codigo">Codigo:</label>
                <label for="title">Titulo:</label>
            </div>

            <div class="row-1">
                <input type="text" name="id" class="form-control" value="{{ 2 }}" readonly>
                <input type="text" name="title" class="form-control"placeholder="Titulo" required>
            </div>

            <div class="row-1">
                <label for="description">Descripcion:</label>
            </div>
            <div class="row-1">
                <textarea name="description" id="description"></textarea>
            </div>


            <div class="row-0">
                <label for="categoria">Categoria:</label>
                <label for="precio">Precio:</label>
            </div>

            <div class="row-0">
                <select name="id_category" class="form-control">
                    <option >Elige una opción</option>
                    <option value="1">Consolas</option>
                    <option value="2">Teclados</option>
                    <option value="3">Lamparas</option>
                    <option value="4">Accesorios</option>
                    <option value="5">Cartuchos</option>
                </select>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="number" name="price" class="form-control" >
                </div>
            </div>

            <div class="row-1">
                <label for="">Mostrar en:</label>
            </div>

            <div class="row-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="web" checked>
                    <label class="form-check-label" for="web">
                      Pagina Web
                    </label>
                  </div>
            </div>
            <div class="row-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="ingresos">
                    <label class="form-check-label" for="ingresos">
                        Ultimos Ingresos
                    </label>
                  </div>
            </div>
            <div class="row-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="outlet" checked>
                    <label class="form-check-label" for="outlet">
                      Listado Outlet
                    </label>
                  </div>
            </div>
            <div class="row-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="rebajas" checked>
                    <label class="form-check-label" for="rebajas">
                      Rebajas
                    </label>
                  </div>
            </div>
            <button class="btn btn-outline-luga" type="submit">Enviar</button>
        </form>
</div>


@stop

@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css">-->
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
@stop

@section('js')

@stop
