@extends('adminlte::page')
@section('title','Perfil')

@section('content_header')
    <h1 style="text-align: center;">Mi Perfil</h1>
    <hr>
@stop
@section('content')


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="float-right">
                <a href="{{ route('configuracion') }}" class="btn btn-outline-luga " style="margin: 5px">Modificar</a>
            </div>
            <table class="table table-striped">
                <tbody>
                    <tr class="table-active">
                        <td >Datos Usuario</td><td ></td>
                    </tr>
                    <tr>
                        <th scope="row">Nombre</th>
                        <td>Nombre Usuario</td>
                    </tr>
                    <tr>
                        <th scope="row">Apellido</th>
                        <td>Apellido Usuario</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>EmailUsuario@email.com</td>
                    </tr>
                    <tr class="table-active">
                        <td >Datos Contacto</td><td ></td>
                    </tr>
                    <tr>
                        <th scope="row">contacto</th>
                        <td>Nombre del Contacto</td>
                    </tr>
                    <tr>
                        <th scope="row">Telefono</th>
                        <td>Telefono Fijo del Contacto</td>
                    </tr>
                    <tr>
                        <th scope="row">Celular</th>
                        <td>Celular del Contacto</td>
                    </tr>
                    <tr class="table-active">
                        <td >Datos Fiscales</td><td > </td>
                    </tr>
                    <tr>
                        <th scope="row">Razon Social</th>
                        <td>Su Razon Fiscal</td>
                    </tr>
                    <tr>
                        <th scope="row">Cuit</th>
                        <td>Cuit del Usuario</td>
                    </tr>
                    <tr>
                        <th scope="row">Condicion</th>
                        <td>Condicion del Usuario</td>
                    </tr>
                    <tr>
                        <th scope="row">Domicilio Fiscal</th>
                        <td>Domicilio fiscal del Usuario</td>
                    </tr>
                    <tr>
                        <th scope="row">Codigo Postal</th>
                        <td>Su Codigo Postal</td>
                    </tr>
                    <tr>
                        <th scope="row">Piso</th>
                        <td>Su Piso</td>
                    </tr>
                    <tr>
                        <th scope="row">Departamento</th>
                        <td>Su departamento</td>
                    </tr>
                    <tr>
                        <th scope="row">Localidad</th>
                        <td> Su localildad</td>
                    </tr>
                    <tr>
                        <th scope="row">Provincia</th>
                        <td>Su Provincia</td>
                    </tr>
                    <tr class="table-active">
                        <td >Datos Comerciales</td><td ></td>
                    </tr>
                    <tr>
                        <th scope="row">Nombre Comercial</th>
                        <td>Nombre del Comercio</td>
                    </tr>
                    <tr>
                        <th scope="row">Domicilio Comercial</th>
                        <td>Direccion del Comercio</td>
                    </tr>
                    <tr>
                        <th scope="row">Codigo Postal</th>
                        <td>El Codigo Postal</td>
                    </tr>
                    <tr>
                        <th scope="row">Piso</th>
                        <td>El Piso</td>
                    </tr>
                    <tr>
                        <th scope="row">Departamento</th>
                        <td>El Departamento</td>
                    </tr>
                    <tr>
                        <th scope="row">Localidad</th>
                        <td>La Localidad del Comercio</td>
                    </tr>
                    <tr>
                        <th scope="row">Provincia</th>
                        <td>La Provincia donde esta el Comercio</td>
                    </tr>
                    <tr>
                        <th scope="row">Telefono</th>
                        <td>Telefono Fijo de del Comercio</td>
                    </tr>
                    <tr>
                        <th scope="row">Fax</th>
                        <td>Fax del Comercio</td>
                    </tr>
                    <tr>
                        <th scope="row">Email del Comercio</th>
                        <td>EmailComercio@email.com</td>
                    </tr>
                    <tr>
                        <th scope="row">Expreso Envio</th>
                        <td>Expreso del Envio</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

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
