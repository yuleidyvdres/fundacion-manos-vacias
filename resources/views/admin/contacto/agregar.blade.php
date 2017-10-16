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
            <h2 id="title-pag">Agregar Atributo Contacto</h2>
        </div>
    </section>
    <section class="row">
        <div class="col-xs-12 col-sm-12">
            <form method="POST" action="{{ route('contacto.store') }}" class="form-width">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="input-group input-group-md">
                        <span class="input-group-addon border-inp bck-icon" id="inputNombre">
                            <i class="fa fa-asterisk" aria-hidden="true"></i>
                        </span>
                        <input type="text" id="nombre" name="nombre" class="form-control border-inp" placeholder="Nombre de Atributo Contacto" aria-describedby="inputNombre" required>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default btn-lg btn-submit">Guardar</button>
                </div>
            </form>
        </div>
    </section>
@endsection