@extends('layouts.app')
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/pacientes.css') }}">
	<link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
   
@endsection

@section('content')
	@include('layouts.common.navbar')
	<center>@include('flash::message')</center>
	@include('Nino.template.Perfil-niño.Formulario-contacto')
	@include('layouts.common.footer')
@endsection
@section('scripts')
	
@endsection