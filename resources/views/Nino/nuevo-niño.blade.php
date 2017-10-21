@extends('layouts.app')
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/pacientes.css') }}">
	<link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
@endsection
@section('scripts1')
	<script type="text/javascript">
		function Estado_municipio(){
		/* Para obtener el valor */

			var cod = document.getElementById("Estado").value;
			var x = document.getElementById("Parroquia");
			if (cod=='Amazonas') {
				var option = document.createElement("option");
				option.text = "Prueba";
				x.add(option);
			}
		}
    </script>
@endsection
@section('content')
	@include('layouts.common.navbar')
	@include('Nino.template.Perfil-niño.Formulario-paciente')
	@include('layouts.common.footer')
@endsection
@section('scripts')
	
@endsection