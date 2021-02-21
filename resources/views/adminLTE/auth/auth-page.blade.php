<title>Luga Distribuidora | Registro</title>
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

                <h1 style="text-align:center; ">Registro de Usuario</h1>
                <hr>


                <form action="{{ route('register') }}" method="post">
                    {{ csrf_field() }}

                    <div class="row">

                        <div class="col">
                            {{-- Card Box --}}
                            <div class="card {{ config('adminlte.classes_auth_card', 'card-outline card-primary') }}">

                                {{-- Card Header --}}
                                <div class="card-header">
                                    <h3 class="card-title float-none text-center">
                                        Datos del Usuario
                                    </h3>
                                </div>

                                {{-- Card Body --}}
                                <div
                                    class="card-body {{ $auth_type ?? 'login' }}-card-body {{ config('adminlte.classes_auth_body', '') }}">

                                    <div class="input-group mb-2">
                                        <input type="text" name="name"
                                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                            value="{{ old('name') }}" placeholder="Nombre de Usuario" autofocus>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                        @if ($errors->has('name'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </div>
                                        @endif
                                    </div>

                                    {{-- Email field --}}
                                    <div class="input-group mb-2">
                                        <input type="email" name="email"
                                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                            value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                        @if ($errors->has('email'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </div>
                                        @endif
                                    </div>

                                    {{-- Password field --}}
                                    <div class="input-group mb-2">
                                        <input type="password" name="password"
                                            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                            placeholder="{{ __('adminlte::adminlte.password') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                        @if ($errors->has('password'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </div>
                                        @endif
                                    </div>

                                    {{-- Confirm password field --}}
                                    <div class="input-group mb-2">
                                        <input type="password" name="password_confirmation"
                                            class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                                            placeholder="{{ __('adminlte::adminlte.retype_password') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                        @if ($errors->has('password_confirmation'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </div>
                                        @endif
                                    </div>
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

                                    <div class="input-group mb-2">
                                        <input type="text" name="contacto" class="form-control" placeholder="Nombre de Contacto">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-2">
                                        <input type="text" name="celular_contacto" class="form-control"
                                            placeholder="Celular de Contacto">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span
                                                    class="fas fa-mobile-alt {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Confirm password field --}}
                                    <div class="input-group mb-2">
                                        <input type="text" name="telefono_contacto" class="form-control"
                                            placeholder="Telefono de Contacto">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-phone-alt {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col" style="margin-left: 5px; margin-right: 5px;">
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

                                    {{-- Email field --}}
                                    <div class="input-group mb-2">
                                        <input type="text" name="nombre_comercial" class="form-control" placeholder="Nombre Comercial">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-tags {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-2">
                                        <input type="text" name="domicilio_comercial" class="form-control"
                                            placeholder="Domicilio Comercial">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-store-alt {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-2">
                                        <input type="text" name="codigo_postal_comercial" class="form-control"
                                            placeholder="Codigo Postal">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-map-pin"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-2">

                                        <input type="number" name="piso_comercial" class="form-control" placeholder="Piso">
                                        <div style="padding-right: 10px" class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-building {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>

                                        <input style="padding-left: 10px" type="text" name="departamento_comercial" class="form-control"
                                            placeholder="Departamento">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span
                                                    class="fas fa-door-closed {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-2">
                                        <input type="text" name="localidad_comercial" class="form-control" placeholder="Localidad">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span
                                                    class="fas fa-map-marked-alt {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-2">
                                        <input type="text" name="provincia_comercial" class="form-control" placeholder="Provincia">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span
                                                    class="fas fa-globe-americas {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-2">
                                        <input type="text" name="telefono_comercial" class="form-control"
                                            placeholder="Telefono Comercial">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-phone-alt {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-2">
                                        <input type="text" name="fax_comercial" class="form-control" placeholder="Fax">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-fax {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-2">
                                        <input type="text" name="email_comercial" class="form-control" placeholder="Email Comercial">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-2">
                                        <input type="text" name="expreso_envio" class="form-control" placeholder="Expreso de Envio">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span
                                                    class="fas fa-shipping-fast {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>
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

                                    {{-- Email field --}}
                                    <div class="input-group mb-2">
                                        <input type="text" name="razon_social" class="form-control" placeholder="Razon Social">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-poll-h {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-2">
                                        <input type="text" name="cuit" class="form-control" placeholder="CUIT">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span
                                                    class="fas fa-user-shield {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-2">
                                        <input type="text" name="condicion" class="form-control" placeholder="Condicion">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-adjust {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-2">
                                        <input type="text" name="domicilio_fiscal" class="form-control" placeholder="Domicilio Fiscal">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-home {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-2">
                                        <input type="text" name="codigo_postal_fiscal" class="form-control" placeholder="Codigo Postal">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-map-pin {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-2">

                                        <input type="number" name="piso_fiscal" class="form-control" placeholder="Piso">
                                        <div style="padding-right: 10px" class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-building"></span>
                                            </div>
                                        </div>

                                        <input style="padding-left: 10px" type="text" name="departamento_fiscal" class="form-control"
                                            placeholder="Departamento">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span
                                                    class="fas fa-door-closed {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-2">
                                        <input type="text" name="localidad_fiscal" class="form-control" placeholder="Localidad">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-map-marked-alt"> </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group mb-2">
                                        <input type="text" name="provincia_fiscal" class="form-control" placeholder="Provincia">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span
                                                    class="fas fa-globe-americas {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            {{-- Card Box --}}
                            <div style="margin-top: 25px;"
                                class="card {{ config('adminlte.classes_auth_card', 'card-outline card-primary') }}">

                                {{-- Card Header --}}
                                <div class="card-header {{ config('adminlte.classes_auth_header', '') }}">

                                    {{-- Register button --}}
                                    <button type="submit" class="btn btn-block btn-luga">
                                        <span class="fas fa-user-plus"></span>
                                        {{ __('adminlte::adminlte.register') }}
                                    </button>
                                </div>

                                <div class="card-footer {{ config('adminlte.classes_auth_footer', '') }}">
                                    <p class="my-0">
                                        <a href="{{ route('login') }}">
                                            {{ __('adminlte::adminlte.i_already_have_a_membership') }}
                                        </a>
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>

                </form>

            @stop

            @section('adminlte_js')
                @stack('js')
                @yield('js')
            @stop
