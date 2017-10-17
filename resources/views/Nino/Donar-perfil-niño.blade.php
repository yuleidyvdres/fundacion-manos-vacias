@extends('layouts.app')
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/donacion-perfil-nino.css') }}">
	<link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    
@endsection

@section('content')
    @include('layouts.common.navbar')
    <div class="container">
    @include('Nino.template.Donar-niño.donar-perfil1') 
    @include('Nino.template.Donar-niño.donar-perfil2')  
    </div>
	
	@include('layouts.common.footer')
@endsection
@section('scripts')
	<script src="{{ asset('js/pacientes.js') }}"></script>
	<script>
        $(document).ready(function () {
            $("#botonIniciar").click (function () {
                $("#iniciarSesion").modal();
            });
        });
    </script>
@endsection