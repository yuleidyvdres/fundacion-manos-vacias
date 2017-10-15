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
    <section class="row">
        <div class="col-xs-12 col-sm-12 search">
            <form class="navbar-form form-width">
                <div class="form-group">
                    <input type="text" class="form-control border-inp" placeholder="Buscar Apellido">
                </div>
                <button type="submit" class="btn btn-default btn-search">
                    <i class="fa fa-search" aria-hidden="true"></i> 
                </button>
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
                            <th>Eliminar</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <tr>
                            <td>8095809</td>
                            <td>Andrea</td>
                            <td>Sánchez</td>
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1234567</td>
                            <td>Carlos</td>
                            <td>Gutierrez</td>
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1234561</td>
                            <td>Teresa</td>
                            <td>de la Parra</td>
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>345671</td>
                            <td>Mario</td>
                            <td>Carvajal</td>
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </center>
        </div>
    </section>
@endsection