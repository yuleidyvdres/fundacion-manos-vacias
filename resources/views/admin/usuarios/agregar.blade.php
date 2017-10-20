@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/tipo-cancer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/form-style.css') }}" rel="stylesheet">
@endsection

@section('content')
    @include('admin.common.navbar')
    <section class="row">
        <div class="col-xs-12 col-sm-12" id="title">
            <h2 id="title-pag">Agregar Usuario</h2>
        </div>
    </section>
    <center>
        @if(count($errors) > 0)
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @include('flash::message')
    </center>
    <section class="row">
        <div class="col-xs-12 col-sm-12">
            <form method="POST" action="{{ route('usuarios.store') }}" class="form-width">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="input-group input-group-md">
                        <span class="input-group-addon border-inp bck-icon" id="inputCI">
                            <i class="fa fa-drivers-license" aria-hidden="true"></i>
                        </span>
                        <input type="text" id="id" name="id" class="form-control border-inp" placeholder="Cédula" aria-describedby="inputCI" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-md">
                        <span class="input-group-addon border-inp bck-icon" id="inputNombre">
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                        </span>
                        <input type="text" id="nombre" name="nombre" class="form-control border-inp" placeholder="Nombre" aria-describedby="inputNombre" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-md">
                        <span class="input-group-addon border-inp bck-icon" id="inputApellido">
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                        </span>
                        <input type="text" id="apellido" name="apellido" class="form-control border-inp" placeholder="Apellido" aria-describedby="inputApellido" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-md">
                        <span class="input-group-addon border-inp bck-icon" id="inputEmail">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        <input type="email" id="email" name="email" class="form-control border-inp" placeholder="Correo" aria-describedby="inputEmail" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-md">
                        <span class="input-group-addon border-inp bck-icon" id="inputpsw">
                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        </span>
                        <input type="password" id="password" name="password" class="form-control border-inp" placeholder="Contraseña" aria-describedby="inputpsw" required>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default btn-lg btn-submit">Guardar</button>
                </div>
            </form>
        </div>
    </section>
    @include('layouts.common.footer')
@endsection