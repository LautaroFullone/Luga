@extends('adminlte::page')
@section('content_header')



  <div class="wishlist-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="li-product-remove">Remover</th>
                                    <th class="li-product-thumbnail">Imagen</th>
                                    <th class="cart-product-name">Producto</th>
                                    <th class="li-product-stock-status">Candidad</th>
                                    <th class="li-product-price">Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                    <td class="li-product-thumbnail"><a href="#"><img src="{{ asset('images/web/Samsung.jpg') }}" width="100px" height="100px"  alt=""></a></td>
                                    <td class="li-product-name"><a href="#">Samsung A10</a></td>
                                    <td class="li-product-stock-status"><span class="in-stock">1</span></td>
                                    <td class="li-product-price"><span class="amount">$21.999,00</span></td>
                                </tr>
                                <tr>
                                    <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                    <td class="li-product-thumbnail"><a href="#"><img src="{{ asset('images/web/vidrio.jpg') }}" width="100px" height="100px" alt=""></a></td>
                                    <td class="li-product-name"><a href="#">Vidrio Templado Samsung A10</a></td>
                                    <td class="li-product-stock-status"><span class="in-stock">1</span></td>
                                    <td class="li-product-price"><span class="amount">$500.00</span></td>
                                </tr>
                                <tr>
                                    <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                    <td class="li-product-thumbnail"><a href="#"><img src="{{ asset('images/web/funda.jpg') }}" width="100px" height="100px" alt=""></a></td>
                                    <td class="li-product-name"><a href="#">Funda Celular</a></td>
                                    <td class="li-product-stock-status"><span class="in-stock">1</span></td>
                                    <td class="li-product-price"><span class="amount">$599.00</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div >
   <table class="table" >
       <tbody>
           <tr class="btn-primary" style="height: 60px">
               <td>
                   Total
               </td>
               <td class="float-right" >$23.100,00</td>
           </tr>
       </tbody>
   </table>
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
