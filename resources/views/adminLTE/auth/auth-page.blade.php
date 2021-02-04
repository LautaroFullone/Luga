@extends('adminlte::master')
@php($dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home'))

    @if (config('adminlte.use_route_url', false))
        @php($dashboard_url = $dashboard_url ? route($dashboard_url) : '')
        @else
            @php($dashboard_url = $dashboard_url ? url($dashboard_url) : '')
            @endif

            @section('adminlte_css')
                @stack('css')
                @yield('css')
            @stop

            @section('classes_body'){{ ($auth_type ?? 'login') . '-page' }}@stop

            @section('body')
                <div class="{{ $auth_type ?? 'login' }}-box">

                    <span>{{-- Logo --}}
                        <div class="{{ $auth_type ?? 'login' }}-logo">
                            <a href="{{ $dashboard_url }}">
                                <img src="{{ asset(config('adminlte.logo_img')) }}" height="50">
                                {!! config('adminlte.logo', '<b>Admin</b>LTE') !!}
                            </a>
                        </div>
                    </span>


                    <div class="row">

                        <div class="col">
                            {{-- Card Box --}}
                            <div class="card {{ config('adminlte.classes_auth_card', 'card-outline card-primary') }}">

                                {{-- Card Header --}}
                                <div class="card-header {{ config('adminlte.classes_auth_header', '') }}">
                                    <h3 class="card-title float-none text-center">
                                        Datos del Usuario
                                    </h3>
                                </div>

                                {{-- Card Body --}}
                                <div
                                    class="card-body {{ $auth_type ?? 'login' }}-card-body {{ config('adminlte.classes_auth_body', '') }}">
                                    <form action="{{ $register_url }}" method="post">
                                        {{ csrf_field() }}

                                        {{-- Email field --}}
                                        <div class="input-group mb-3">
                                            <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                   value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                            @if($errors->has('email'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </div>
                                            @endif
                                        </div>

                                        {{-- Password field --}}
                                        <div class="input-group mb-3">
                                            <input type="password" name="password"
                                                   class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                                   placeholder="{{ __('adminlte::adminlte.password') }}">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                            @if($errors->has('password'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </div>
                                            @endif
                                        </div>

                                        {{-- Confirm password field --}}
                                        <div class="input-group mb-3">
                                            <input type="password" name="password_confirmation"
                                                   class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                                                   placeholder="{{ __('adminlte::adminlte.retype_password') }}">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                            @if($errors->has('password_confirmation'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </div>
                                            @endif
                                        </div>

                                        {{-- Register button --}}
                                        <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                                            <span class="fas fa-user-plus"></span>
                                            {{ __('adminlte::adminlte.register') }}
                                        </button>

                                    </form>
                                </div>

                                {{-- Card Footer --}}
                                <div class="card-footer {{ config('adminlte.classes_auth_footer', '') }}">
                                    <p class="my-0">
                                        <a href="{{ $login_url }}">
                                            {{ __('adminlte::adminlte.i_already_have_a_membership') }}
                                        </a>
                                    </p>
                                </div>


                            </div>

                            {{-- Card Box --}}
                            <div class="card {{ config('adminlte.classes_auth_card', 'card-outline card-primary') }}">

                                {{-- Card Header --}}
                                <div class="card-header {{ config('adminlte.classes_auth_header', '') }}">
                                    <h3 class="card-title float-none text-center">
                                        Datos de Contacto
                                    </h3>
                                </div>

                                {{-- Card Body --}}
                                <div
                                class="card-body {{ $auth_type ?? 'login' }}-card-body {{ config('adminlte.classes_auth_body', '') }}">
                                <form action="{{ $register_url }}" method="post">
                                    {{ csrf_field() }}

                                    <div class="input-group mb-3">
                                        <input type="text" name="contacto" class="form-control" placeholder="Nombre de Contacto">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="text" name="celular" class="form-control" placeholder="Celular de Contacto">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Confirm password field --}}
                                    <div class="input-group mb-3">
                                        <input type="text" name="telefono" class="form-control" placeholder="Telefono de Contacto">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Register button --}}
                                    <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                                        <span class="fas fa-user-plus"></span>
                                        {{ __('adminlte::adminlte.register') }}
                                    </button>

                                </form>
                            </div>

                                {{-- Card Footer --}}
                                <div class="card-footer {{ config('adminlte.classes_auth_footer', '') }}">
                                    <p class="my-0">
                                        <a href="{{ $login_url }}">
                                            {{ __('adminlte::adminlte.i_already_have_a_membership') }}
                                        </a>
                                    </p>
                                </div>


                            </div>
                        </div>

                        <div class="col">
                            {{-- Card Box --}}
                            <div class="card {{ config('adminlte.classes_auth_card', 'card-outline card-primary') }}">

                                {{-- Card Header --}}
                                <div class="card-header {{ config('adminlte.classes_auth_header', '') }}">
                                    <h3 class="card-title float-none text-center">
                                        Datos Fiscales
                                    </h3>
                                </div>

                                {{-- Card Body --}}
                                <div
                                    class="card-body {{ $auth_type ?? 'login' }}-card-body {{ config('adminlte.classes_auth_body', '') }}">
                                    {{-- @yield('auth_body') --}}

                                    <form action="{{ $register_url }}" method="post">
                                        {{ csrf_field() }}

                                        {{-- Email field --}}
                                        <div class="input-group mb-3">
                                            <input type="text" name="razon_social" class="form-control" placeholder="Razon Social">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                        <input type="text" name="cuit" class="form-control" placeholder="CUIT">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" name="condicion" class="form-control" placeholder="Condicion">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" name="domicilio_fiscal" class="form-control" placeholder="Domicilio Fiscal">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" name="codigo_postal" class="form-control" placeholder="Codigo Postal">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">

                                            <input type="text" name="piso" class="form-control" placeholder="Piso">
                                            <div style="padding-right: 10px"class="input-group-append">
                                                <div class="input-group-text">
                                                    <span
                                                        class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>

                                            <input style="padding-left: 10px" type="text" name="departamento" class="form-control" placeholder="Departamento">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span
                                                        class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" name="localidad" class="form-control" placeholder="Localidad">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" name="provincia" class="form-control" placeholder="Provincia">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                        </div>


                                        {{-- Register button --}}
                                        <button type="submit"
                                            class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                                            <span class="fas fa-user-plus"></span>
                                            {{ __('adminlte::adminlte.register') }}
                                        </button>

                                    </form>
                                </div>

                                {{-- Card Footer --}}
                                @hasSection('auth_footer')
                                    <div class="card-footer {{ config('adminlte.classes_auth_footer', '') }}">
                                        @yield('auth_footer')
                                    </div>
                                @endif

                            </div>
                        </div>

                        <div class="col">
                            {{-- Card Box --}}
                            <div class="card {{ config('adminlte.classes_auth_card', 'card-outline card-primary') }}">

                                {{-- Card Header --}}
                                <div class="card-header {{ config('adminlte.classes_auth_header', '') }}">
                                    <h3 class="card-title float-none text-center">
                                        Datos Comerciales
                                    </h3>
                                </div>

                                {{-- Card Body --}}
                                <div
                                    class="card-body {{ $auth_type ?? 'login' }}-card-body {{ config('adminlte.classes_auth_body', '') }}">
                                    {{-- @yield('auth_body') --}}

                                    <form action="{{ $register_url }}" method="post">
                                        {{ csrf_field() }}

                                        {{-- Email field --}}
                                        <div class="input-group mb-3">
                                            <input type="text" name="nombre_comercial" class="form-control" placeholder="Nombre Comercial">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                        <input type="text" name="domicilio_envio" class="form-control" placeholder="Domicilio de Envio">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" name="codigo_postal" class="form-control" placeholder="Codigo Postal">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" name="domicilio_fiscal" class="form-control" placeholder="Domicilio Fiscal">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" name="codigo_postal" class="form-control" placeholder="Codigo Postal">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">

                                            <input type="text" name="piso" class="form-control" placeholder="Piso">
                                            <div style="padding-right: 10px"class="input-group-append">
                                                <div class="input-group-text">
                                                    <span
                                                        class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>

                                            <input style="padding-left: 10px" type="text" name="departamento" class="form-control" placeholder="Departamento">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span
                                                        class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" name="localidad" class="form-control" placeholder="Localidad">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" name="provincia" class="form-control" placeholder="Provincia">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>
                                        </div>


                                        {{-- Register button --}}
                                        <button type="submit"
                                            class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                                            <span class="fas fa-user-plus"></span>
                                            {{ __('adminlte::adminlte.register') }}
                                        </button>

                                    </form>
                                </div>

                                {{-- Card Footer --}}
                                @hasSection('auth_footer')
                                    <div class="card-footer {{ config('adminlte.classes_auth_footer', '') }}">
                                        @yield('auth_footer')
                                    </div>
                                @endif

                            </div>
                        </div>


                        <div class="row">

                            <form action="/registrarse" id="UserRegisterForm" method="post" accept-charset="utf-8" class="card-body {{ $auth_type ?? 'login' }}-card-body {{ config('adminlte.classes_auth_body', '') }}">
                                <div style="display:none;"><input type="hidden" name="_method" value="POST" /></div>
                                <div class="row">
                                    <div class="col-md-4" style="background-color:#f9f9f9;padding:10px 20px 30px 20px">
                                        <h2>Datos del usuario</h2>
                                        <div class="input-group mb-3">
                                            <label  for="UserEmail">Email</label>

                                            <input id="email" type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                            placeholder="{{ __('adminlte::adminlte.email') }}"/>

                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span
                                                        class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="input password"><label for="UserPassword">Contraseña</label><input
                                                name="data[User][password]" required="required" class="form-control" type="password"
                                                id="UserPassword" /></div>
                                        <h2>Datos de contacto</h2>
                                        <div class="input text"><label for="UserContact">Contacto</label><input
                                                name="data[User][contact]" required="required" class="form-control" maxlength="200"
                                                type="text" id="UserContact" /></div>
                                        <div class="input tel"><label for="UserPhone">Telefono</label><input name="data[User][phone]"
                                                required="required" class="form-control" maxlength="100" type="tel" id="UserPhone" />
                                        </div>
                                        <div class="input text"><label for="UserCellphone">Celular</label><input
                                                name="data[User][cellphone]" class="form-control" maxlength="100" type="text"
                                                id="UserCellphone" /></div>

                                    </div>
                                    <div class="col-md-4" style="background-color:#f0f0f0;padding:10px 20px 30px 20px">
                                        <h2>Datos fiscales</h2>
                                        <div class="input text"><label for="UserBusinessName">Razon Social</label><input
                                                name="data[User][business_name]" required="required" class="form-control"
                                                maxlength="300" type="text" id="UserBusinessName" /></div>
                                        <div class="input text"><label for="UserCuitnumber">CUIT</label><input
                                                name="data[User][cuitnumber]" required="required" class="form-control" maxlength="50"
                                                type="text" id="UserCuitnumber" /></div>
                                        <div class="input text"><label for="UserCondition">Condición</label><input
                                                name="data[User][condition]" required="required" class="form-control" maxlength="200"
                                                type="text" id="UserCondition" /></div>
                                        <div class="input text"><label for="UserAddress">Domicilio fiscal</label><input
                                                name="data[User][address]" required="required" class="form-control" maxlength="200"
                                                type="text" id="UserAddress" /></div>
                                        <div class="input text"><label for="UserPostcode">Codigo Postal</label><input
                                                name="data[User][postcode]" required="required" class="form-control" maxlength="50"
                                                type="text" id="UserPostcode" /></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input text"><label for="UserFloor">Piso</label><input
                                                        name="data[User][floor]" class="form-control" maxlength="50" type="text"
                                                        id="UserFloor" /></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input text"><label for="UserApartment">Departamento</label><input
                                                        name="data[User][apartment]" class="form-control" maxlength="50" type="text"
                                                        id="UserApartment" /></div>
                                            </div>
                                        </div>
                                        <div class="input text"><label for="UserLocalidad">Localidad</label><input
                                                name="data[User][localidad]" required="required" class="form-control" maxlength="200"
                                                type="text" id="UserLocalidad" /></div>
                                        <div class="input text"><label for="UserProvincia">Provincia</label><input
                                                name="data[User][provincia]" required="required" class="form-control" maxlength="200"
                                                type="text" id="UserProvincia" /></div>
                                    </div>
                                    <div class="col-md-4" style="background-color:#f9f9f9;padding:10px 20px 30px 20px">
                                        <h2>Datos comerciales</h2>
                                        <div class="input text"><label for="UserComercialName">Nombre comercial</label><input
                                                name="data[User][comercial_name]" required="required" class="form-control"
                                                maxlength="200" type="text" id="UserComercialName" /></div>
                                        <div class="input text"><label for="UserShipmentAddress">Domicilio de envío</label><input
                                                name="data[User][shipment_address]" required="required" class="form-control"
                                                maxlength="200" type="text" id="UserShipmentAddress" /></div>
                                        <div class="input number"><label for="UserComercialPostcode">Codigo Postal</label><input
                                                name="data[User][comercial_postcode]" required="required" class="form-control"
                                                type="number" id="UserComercialPostcode" /></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input text"><label for="UserComercialFloor">Piso</label><input
                                                        name="data[User][comercial_floor]" class="form-control" maxlength="200"
                                                        type="text" id="UserComercialFloor" /></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input text"><label for="UserComercialApartment">Departamento</label><input
                                                        name="data[User][comercial_apartment]" class="form-control" maxlength="200"
                                                        type="text" id="UserComercialApartment" /></div>
                                            </div>
                                        </div>
                                        <div class="input text"><label for="UserComercialLocalidad">Localidad</label><input
                                                name="data[User][comercial_localidad]" required="required" class="form-control"
                                                maxlength="200" type="text" id="UserComercialLocalidad" /></div>
                                        <div class="input text"><label for="UserComercialProvincia">Provincia</label><input
                                                name="data[User][comercial_provincia]" required="required" class="form-control"
                                                maxlength="200" type="text" id="UserComercialProvincia" /></div>
                                        <div class="input text"><label for="UserComercialPhone">Telefono</label><input
                                                name="data[User][comercial_phone]" required="required" class="form-control"
                                                maxlength="200" type="text" id="UserComercialPhone" /></div>
                                        <div class="input text"><label for="UserComercialFax">Fax</label><input
                                                name="data[User][comercial_fax]" class="form-control" maxlength="200" type="text"
                                                id="UserComercialFax" /></div>
                                        <div class="input text"><label for="UserComercialEmail">Email</label><input
                                                name="data[User][comercial_email]" class="form-control" maxlength="200" type="text"
                                                id="UserComercialEmail" /></div>
                                        <div class="input text"><label for="UserComercialShipment">Expreso de envío</label><input
                                                name="data[User][comercial_shipment]" class="form-control" maxlength="200" type="text"
                                                id="UserComercialShipment" /></div><input type="hidden" name="data[User][profile_id]"
                                            value="1" id="UserProfileId" /><input type="hidden" name="data[User][active]" value="0"
                                            id="UserActive" />
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="submit"><input class="btn btn-connect-primary" type="submit" value="Registrarse" />
                                    </div>
                            </form>
                        </div>
                    </div>



                </div>
            @stop

            @section('adminlte_js')
                @stack('js')
                @yield('js')
            @stop
