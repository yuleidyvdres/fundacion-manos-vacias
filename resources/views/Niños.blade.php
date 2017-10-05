@extends('layouts.app')
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/pacientes.css') }}">
	<link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    
@endsection

@section('content')
		@include('layouts.common.navbar')
	<div><button id="boton"><span class="glyphicon glyphicon-plus"></span> Agregar un Paciente</button></div>
	 <div id="panel">
	 	<center><div class="tamano">
		@include('template.Perfil-niño.Formulario-paciente')
		</div></center>
	</div>
	@include('template.Perfil-niño.Perfil-ninno')
	@include('layouts.common.footer')
@endsection
@section('scripts')
	<script src="{{ asset('js/pacientes.js') }}"></script>
@endsection

    
