<div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index">
                                        <img src="images/web/logo.png" alt="Header Logo">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="#" class="hm-searchbox">
                                    <select class="nice-select select-search-category">
                                        <option value="0">Categorias</option>
                                        <option value="1">Telefonia</option>
                                        <option value="2">Juego</option>
                                        <option value="3">Computacion</option>
                                        <option value="4">Fotografia</option>
                                        <option value="5">Audio</option>
                                        <option value="6">Accesorios</option>
                                        <option value="7">Cables</option>
                                        <option value="8">GPS</option>
                                        <option value="9">Iluminacion</option>
                                        <option value="10">Seguridad</option>
                                        <option value="11">Varios</option>
                                    </select>

                                    <input type="text" placeholder="Ingrese producto para buscar ...">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->

                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class="hm-wishlist">
                                            <a href="wishlist.html">
                                                <span class="cart-item-count wishlist-item-count">0</span>
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </li>
                                <!-- Header Middle Wishlist Area End Here -->

                                        <!-- Begin Header Mini Cart Area -->
                                        @include('layoutsWeb.carro')
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
