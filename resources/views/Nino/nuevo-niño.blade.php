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
	<script type="text/javascript">
		var fecha = document.getElementById('Fecha_nac');
		var hoy = new Date();
		var dd = hoy.getDate();
		var mm = hoy.getMonth()+1; 
		var yyyy = hoy.getFullYear();
		if(dd<10) {
		    dd='0'+dd
		} 
		if(mm<10) {
		    mm='0'+mm
		} 
		hoy = yyyy+'-'+mm+'-'+dd;	
		fecha.setAttribute("max",hoy);
</script>
@endsection