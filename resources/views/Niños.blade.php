@extends('layouts.app')
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/pacientes.css') }}">
@endsection

@section('content')
		@include('layouts.common.navbar')
	<div><button id="boton"><span class="glyphicon glyphicon-plus"></span> Agregar un Paciente</button></div>
	 <div id="panel">
	 	<center><div class="tamano">
		@include('template.Formulario-paciente')
		</div></center>
	</div>
	@include('template.Perfil-ninno')
@endsection
@section('scripts')
	<script src="{{ asset('plugins/jquery/jquery-1.11.3.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/pacientes.js') }}"></script>
@endsection