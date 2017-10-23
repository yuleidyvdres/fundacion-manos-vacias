@extends('layouts.app')
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/pacientes.css') }}">
	<link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
@endsection

@section('content')
	@include('layouts.common.navbar')
	<center>@include('flash::message')</center>
	
<div class="container">

<form method="POST" class="form-width" action="{{ route('Niño.update_donacion') }}">
	 {{ csrf_field() }}
	  <label class="titulo">Editar Donación</label></br>
	   <div class="form-group" style="display: none;">
			<div class="input-group input-group-md input-capsule">
				<span class="borde-inc input-group-addon">
					<i class="fa fa-id-card" aria-hidden="true"></i>
				</span>
				<input type="text" class="borde form-control" id="don" name="don" value="{{$don}}" onfocus="this.blur()">
			</div>
		 </div>
	   <div class="form-group">
			<div class="input-group input-group-md input-capsule">
				<span class="borde-inc input-group-addon">
					<i class="fa fa-id-card" aria-hidden="true"></i>
				</span>
				<input type="text" class="borde form-control" id="id" name="id" value="{{$id}}" onfocus="this.blur()">
			</div>
		 </div>
		 <br>
		<div class="form-group">
			<div class="input-group input-group-md input-capsule">
				<span class="borde-inc input-group-addon">
					<i class="fa fa-eyedropper" aria-hidden="true"></i>
				</span>
				<input type="text" class="borde form-control" id="donacion" name="donacion" value="{{$donacion}}" onfocus="this.blur()">
			</div>
		 </div>
		<br>
		<!-- Cantidad-->
		<div class="form-group">
			<div class="input-group input-group-md input-capsule">
				<span class="input-group-addon borde-inc" id="inputUsuario">
			        <i class="fa fa-asterisk" aria-hidden="true"></i>
			    </span>
				<input type="number" class="borde form-control" id="cantidad" name="cantidad" placeholder="Cantidad Requerida" value="{{$can}}" max="<?php echo $can?>" min="0" required>
			</div>
		</div>
		<!-- Urgencia -->
  		<div class="input-group input-group-md input-capsule" style="width: 100%; padding: 10px;">
			<label for="Avance-Cancer" style="text-align: left; width: 100%;">Urgencia</label>
			<select class="form-control" id="Urgencia" name="Urgencia" required>
				<option>{{$urgencia}}</option>
				<option>Baja</option>
				<option>Mediana</option>
				<option>Alta</option>
			</select>
		</div>
		<br>
		<!-- Status 
  		<div class="input-group input-group-md input-capsule" style="width: 100%; padding: 10px;">
			<label for="Avance-Cancer" style="text-align: left; width: 100%;">Estatus</label>
			<select class="form-control" id="Status" name="Status" required>
				<option>No-recibido</option>
				<option>Recibido</option>
			</select>
		</div>
		<br>-->
		<!-- Comentario -->
		<div class="input-group input-group-md input-capsule">
			<span class="borde-inc input-group-addon">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</span>
			<textarea class="form-control" rows="3" id="comentario" name="comentario" placeholder="Se recomienda colocar un comentario de agradeciomieto por la donación"></textarea>
	    </div><br>
		<center>
	    <input type="submit" value="Editar Donación" id="btn-agregar" class="btn btn-default btn-md btn-submit">
	    </center><br>
</form>
</div>




	@include('layouts.common.footer')
@endsection
@section('scripts')

@endsection