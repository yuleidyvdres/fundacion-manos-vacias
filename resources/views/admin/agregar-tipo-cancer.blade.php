@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/agregar-tipo-cancer.css') }}" rel="stylesheet">
@endsection
@section('content')
    @include('admin.common.navbar')
        <section class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="title-page">
                    <h2>Agregar tipo de cáncer</h2>
                </div>
            </div>
        </section>
    @include('layouts.common.footer')
@endsection