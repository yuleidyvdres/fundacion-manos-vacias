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
            <h2 id="title-pag">Lista de Atributos Contacto</h2>
        </div>
    </section>
    <center>
        @include('flash::message')
    </center>
    <section class="row">
        <div class="col-xs-12 col-sm-12 search">
            <form class="navbar-form form-width">
                <div class="form-group">
                    <input type="text" class="form-control border-inp" placeholder="Buscar Nombre">
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
                            <th>ID</th>
                            <th>Nombre Atributo Contacto</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach($contacto as $cont)
                            <tr>
                                <td>{{ $cont->id }}</td>
                                <td>{{ $cont->nombre }}</td>
                                <td>
                                    <a href="{{ route('admin.contacto.destroy', $cont->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $contacto->render() !!}
            </center>
        </div>
    </section>
@endsection