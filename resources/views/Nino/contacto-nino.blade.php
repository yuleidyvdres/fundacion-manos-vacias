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
	<script type="text/javascript">
		function validar(){
			
			var cod = document.getElementById('Tipo_contacto').value;
            
	        var input = document.getElementById('valor_cont');
	        
	        if (cod==7) {
	        	input.setAttribute("minlength", "11");
	        	input.setAttribute("maxlength", "11"); 
	        }else{
	        	input.setAttribute("minlength", "1");
	        	input.setAttribute("maxlength", "60");
	        }

	        if(cod==6){
	        	input.setAttribute("type", "email");
	        }else{
	        	input.setAttribute("type", "text");
	        }
		}
	</script>
@endsection