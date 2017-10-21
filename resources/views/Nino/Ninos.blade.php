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
	<div class="container">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span> 
		      </button>
		      <a class="navbar-brand" href="#">Niños</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		    <ul class="nav navbar-nav">
		    @foreach($nino as $nin)	
		      <li><a href="#<?php echo $nin->id ?>">{{$nin->nombre}}</a></li>
		    @endforeach
		    </ul>
		  </div>
		</div>
		</nav>
	</div>
	<?php $var=0; ?>
    @foreach($nino as $nin)
    		<?php $var++; ?>  
            @include('Nino.template.Perfil-niño.Perfil-ninno')
    @endforeach

	<?php if ($var==0) { ?>
		@include('Nino.template.Perfil-niño.Perfil-sin-nino')		
	<?php } ?>

		
	
	@include('layouts.common.footer')
@endsection
@section('scripts')
@endsection

    
