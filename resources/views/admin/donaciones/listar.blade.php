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
            <h2 id="title-pag">Lista de Donaciones</h2>
        </div>
    </section>
    <center>
        @include('flash::message')
    </center>
    <section class="row">
        @include('flash::message')
        <div class="col-xs-12 col-sm-12 search">
            <form class="navbar-form form-width" method="POST" action="{{ route('admin.donaciones.search') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="nombre" class="form-control border-inp" placeholder="Buscar Nombre">
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
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach($donaciones as $donacion)
                            <tr>
                                <td>{{ $donacion->id }}</td>
                                <td>{{ $donacion->nombre }}</td>
                                <td>{{ $donacion->tipo }}</td>
                                <td>
                                    <a href="{{ route('admin.donacion.destroy', $donacion->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $donaciones->render() !!}
            </center>
        </div>
    </section>
@endsection