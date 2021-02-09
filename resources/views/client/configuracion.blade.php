@extends('adminlte::page')
@section('title','Configuracion')

@section('content_header')
    <h1 style="text-align: center;">Modificar mi Perfil</h1>
    <hr>
@stop
@section('content')

<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <tbody>
                        <tr class="table-active">
                            <td >Datos Usuario</td><td ></td>
                        </tr>
                        <tr>
                            <th scope="row">Nombre</th>
                            <td><input type="text" class="form-control col-4" name='Nombre' value='Nombre Del usuario'></td>

                        </tr>
                        <tr>
                            <th scope="row">Apellido</th>
                            <td><input type="text" class="form-control col-4" name='Apellido' value='Apellido Usuario'></td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td><input type="text" class="form-control col-4" name='Email' value='EmailUsuario@email.com'></td>
                        </tr>
                        <tr class="table-active">
                            <td >Datos Contacto</td><td ></td>
                        </tr>
                        <tr>
                            <th scope="row">contacto</th>
                            <td><input type="text" class="form-control col-4" name='contacto' value='Nombre del Contacto'></td>
                        </tr>
                        <tr>
                            <th scope="row">Telefono</th>
                            <td><input type="text" class="form-control col-4" name='Telefono' value='Telefono Fijo del Contacto'></td>
                        </tr>
                        <tr>
                            <th scope="row">Celular</th>
                            <td><input type="text" class="form-control col-4" name='Celular' value='Celular del Contacto'></td>
                        </tr>
                        <tr class="table-active">
                            <td >Datos Fiscales</td><td > </td>
                        </tr>
                        <tr>
                            <th scope="row">Razon Social</th>
                            <td><input type="text" class="form-control col-4" name='Razon Social' value='Su Razon Fiscal'></td>
                        </tr>
                        <tr>
                            <th scope="row">Cuit</th>
                            <td><input type="text" class="form-control col-4" name='' value='Cuit del Usuario'></td>
                        </tr>
                        <tr>
                            <th scope="row">Condicion</th>
                            <td><input type="text" class="form-control col-4" name='Cuit' value='Condicion del Usuario'></td>
                        </tr>
                        <tr>
                            <th scope="row">Domicilio Fiscal</th>
                            <td><input type="text" class="form-control col-4" name='Domicilio Fiscal' value='Domicilio Fiscal del Usuario'></td>
                        </tr>
                        <tr>
                            <th scope="row">Codigo Postal</th>
                            <td><input type="text" class="form-control col-4" name='Codigo Postal' value='Su Codigo Postal'></td>
                        </tr>
                        <tr>
                            <th scope="row">Piso</th>
                            <td><input type="text" class="form-control col-4" name='Piso' value='Su Piso'></td>
                        </tr>
                        <tr>
                            <th scope="row">Departamento</th>
                            <td><input type="text" class="form-control col-4" name='Departamento' value='Su Departamento'></td>
                        </tr>
                        <tr>
                            <th scope="row">Localidad</th>
                            <td><input type="text" class="form-control col-4" name='Localidad' value='Su Localidad'></td>
                        </tr>
                        <tr>
                            <th scope="row">Provincia</th>
                            <td><input type="text" class="form-control col-4" name='Provincia' value='Su Provincia'></td>
                        </tr>
                        <tr class="table-active">
                            <td >Datos Comerciales</td><td ></td>
                        </tr>
                        <tr>
                            <th scope="row">Nombre Comercial</th>
                            <td><input type="text" class="form-control col-4" name='Nombre Comercial' value='Nombre del Comercio'></td>
                        </tr>
                        <tr>
                            <th scope="row">Domicilio Comercial</th>
                            <td><input type="text" class="form-control col-4" name='Domicilio Comercial' value='Direccion del Comercio'></td>
                        </tr>
                        <tr>
                            <th scope="row">Codigo Postal</th>
                            <td><input type="text" class="form-control col-4" name='Codigo Postal' value='El Codigo Postal'></td>
                        </tr>
                        <tr>
                            <th scope="row">Piso</th>
                            <td><input type="text" class="form-control col-4" name='Piso' value='El Piso'></td>
                        </tr>
                        <tr>
                            <th scope="row">Departamento</th>
                            <td><input type="text" class="form-control col-4" name='Departamento' value='El Departamento'></td>
                        </tr>
                        <tr>
                            <th scope="row">Localidad</th>
                            <td><input type="text" class="form-control col-4" name='Localidad' value='La Localidad del Comercio'></td>
                        </tr>
                        <tr>
                            <th scope="row">Provincia</th>
                            <td><input type="text" class="form-control col-4" name='Provincia' value='La Provincia donde esta el Comercio'></td>
                        </tr>
                        <tr>
                            <th scope="row">Telefono</th>
                            <td><input type="text" class="form-control col-4" name='Telefono' value='Telefono Fijo de del Comercio'></td>
                        </tr>
                        <tr>
                            <th scope="row">Fax</th>
                            <td><input type="text" class="form-control col-4" name='Fax' value='Fax del Comercio'></td>
                        </tr>
                        <tr>
                            <th scope="row">Email del Comercio</th>
                            <td><input type="text" class="form-control col-4" name='Email del Comercio' value='EmailComercio@email.com'></td>
                        </tr>
                        <tr>
                            <th scope="row">Expreso Envio</th>
                            <td><input type="text" class="form-control col-4" name='Expreso Envio' value='Expreso del Envio'></td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ asset('cliente/perfil') }}" class="btn btn-outline-primary" style="margin: 1em"> Regresar</a>
                <button type="submit" class="btn btn-outline-primary float-right" style="margin: 1em">Enviar</button>
            </div>
        </div>
    </form>
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
