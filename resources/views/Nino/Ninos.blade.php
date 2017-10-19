@extends('layouts.app')
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/pacientes.css') }}">
	<link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    
@endsection

@section('content')
	@include('layouts.common.navbar')
	<div><button id="boton"><a href="{{ route('Niño.create') }}"><span class="glyphicon glyphicon-plus"></span> Agregar un Paciente</a></button></div>
	<center>@include('flash::message')</center>
	<?php $var=0; ?>
    @foreach($nino as $nin)
    		<?php $var++; ?>  
            @include('Nino.template.Perfil-niño.Perfil-ninno')
    @endforeach

	<?php if ($var==0) { ?>
	@foreach($nino as $nin)
		@include('Nino.template.Perfil-niño.Perfil-sin-nino')
		
	@endforeach
	<?php } ?>
<div>{{ ucfirst(trans($nin->nombre)) }}</div>
		
	
	@include('layouts.common.footer')
@endsection
@section('scripts')
@endsection

    
