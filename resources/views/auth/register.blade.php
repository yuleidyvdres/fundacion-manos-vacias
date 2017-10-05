@extends('layouts.app')

<!--section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
endsection-->
@section('styles')
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!--div class="row color-section"></div-->
   @include('layouts.common.navbar')
    <section class="row title-page">
        <div class="col-xs-12 col-sm-12">
            <a href="{{ url('/') }}"><h1>Fundación Niños con Cáncer</h1></a>
        </div>
    </section>
    <section class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-4">
            <!--h3>Regístrate</h3-->

            <form method="POST" class="form-horizontal" action="{{ route('register') }}" id="form-registrar">
                {{ csrf_field() }}

                <!-- Cédula -->
                <div class="form-group">
                    <div class="input-group input-group-md input-capsule">
                        <span class="input-group-addon borde-inc" id="inputCedula">
                            <i class="fa fa-id-card-o" aria-hidden="true"></i>
                        </span>
                        <input type="text" id="ci" name="ci" class="form-control borde" placeholder="Cédula" aria-describedby="inputCedula" required>
                    </div>
                </div>
                <!-- Nombre -->
                <div class="form-group">
                    <div class="input-group input-group-md input-capsule">
                        <span class="input-group-addon borde-inc" id="inputNombre">
                            <i class="fa fa-id-card-o" aria-hidden="true"></i>
                        </span>
                        <input type="text" id="nombre" name="nombre" class="form-control borde input-register" placeholder="Nombre y Apellido" aria-describedby="inputNombre" required>
                    </div>
                </div>
                <!-- Correo -->
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-group input-group-md input-capsule">
                        <span class="input-group-addon borde-inc" id="inputEmail">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </span>
                        <input type="email" id="email" name="email" class="form-control borde input-register" placeholder="Correo Electrónico" aria-describedby="inputEmail" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- Contraseña -->
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group input-group-md input-capsule">
                        <span class="input-group-addon borde-inc" id="inputPassword">
                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        </span>
                        <input type="password" id="password" name="password" class="form-control borde input-register" placeholder="Contraseña" aria-describedby="inputPassword" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- Confirmar contraseña -->
                <div class="form-group">
                    <div class="input-group input-group-md input-capsule">
                        <span class="input-group-addon borde-inc" id="password-confirm">
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </span>
                        <input type="password" id="password-confirm" name="password_confirmation" class="form-control borde input-register" placeholder="Confirmar contraseña" aria-describedby="password-confirm" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-default btn-lg btn-registrar">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xs-12 col-sm-6" id="separacion">
            <div class="row">
                <div class="col-xs-12 col-sm-12 title-page" >
                    <h3>Una Mano Amiga</h3>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <p>En la Fundación del Niño con Cáncer te ofrecemos una mano amiga con la cual puedes
                       contar para el beneficio de tu hijo o representado.
                    </p>
                    <p>Sólo tienes que registrarte como padre o representante, seguidamente registrar a tu 
                       niño y así nuestra Fundación publicará el insumo o medicamento que necesitas.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-12" id="icon-center">
                    <h1>
                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.common.footer')
@endsection
@section('scripts')
	<script>
        $(document).ready(function () {
            $("#botonIniciar").click (function () {
                $("#iniciarSesion").modal();
            });
        });
    </script>
@endsection