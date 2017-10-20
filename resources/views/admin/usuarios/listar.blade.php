@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/admin/tipo-cancer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/form-style.css') }}" rel="stylesheet">
@endsection
@section('content')
    @include('admin.common.navbar')
    <section class="row">
        <div class="col-xs-12 col-sm-12" id="title">
            <h2 id="title-pag">Lista de Usuarios</h2>
        </div>
    </section>
    <center>
        @include('flash::message')
    </center>
    <section class="row">
        <div class="col-xs-12 col-sm-12 search">
            <form class="navbar-form form-width" method="POST" action="{{ route('admin.usuarios.search') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="apellido" class="form-control border-inp" placeholder="Buscar Apellido">
                </div>
                <div class="form-group">
                    <input type="submit" value="Buscar" class="btn btn-default btn-md btn-submit">
                </div>
            </form>
        </div>
    </section>
    <section class="row">
        <div class="col-xs-12 col-sm-12">
            <center>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Tipo</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->nombre }}</td>
                                <td>{{ $usuario->apellido }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->rol }}</td>
                                <td>
                                    <a href="{{ route('admin.usuarios.destroy', $usuario->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach                        
                    </tbody>
                </table>
                {!! $usuarios->render() !!}
            </center>
        </div>
    </section>
    @include('layouts.common.footer')
@endsection
