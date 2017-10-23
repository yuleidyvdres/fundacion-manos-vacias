@extends('layouts.app')
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/pacientes.css') }}">
	<link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
@endsection
@section('scripts1')
	<script src="{{ asset('js/estados.js') }}"></script>
@endsection
@section('content')
	@include('layouts.common.navbar')
	@include('Nino.template.Perfil-niño.Formulario-paciente')
	@include('layouts.common.footer')
@endsection
@section('scripts')
	
@endsection