@extends('layouts.app')
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/pacientes.css') }}">
	<link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <style>
    .col-sm-6>p,.col-sm-6>h4{
        letter-spacing: 1px;
        text-align: center
     }
     h4{
        color:#ff873e;
        font-weight: bold;
     }
     .contenedor{padding-left: 0%;}
    </style>
    
@endsection

@section('content')
		@include('layouts.common.navbar')
	<div><button id="boton"><span class="glyphicon glyphicon-plus"></span> Agregar un Paciente</button></div>
	 <div id="panel">
	 	<center><div class="tamano">
		@include('template.Perfil-niño.Formulario-paciente')
		</div></center>
    </div>
    <div class="container-fluid ">
    <div class="row">
      <div class="col-sm-6 contenedor"><img src="{{ asset('imagenes/cancer.jpg') }}" style="width: 100%;" alt="cancer"></div>
      <div class="col-sm-6" style="padding-top: 4%; padding-right: 5%; padding-left: 5%;">
         <h4>Bienvenido a la Fundación Ayudando Manos Vacías</h4> 
         <p>En la Fundación del Niño con Cáncer te ofrecemos una mano amiga con
           la cual puedes contar para el beneficio de tu hijo o representado.
         </p>
         <p>Registrar a tu niño y así nuestra Fundación publicará el
         insumo o medicamento que necesitas.</p>
         <p>Porque los niños no pueden luchar contra el cáncer solos.</p>
      </div>
    </div> 
    </div>
     
@include('layouts.common.footer')
@endsection
@section('scripts')
	<script src="{{ asset('js/pacientes.js') }}"></script>
	<script>
        $(document).ready(function () {
            $("#botonIniciar").click (function () {
                $("#iniciarSesion").modal();
            });
        });
    </script>
@endsection
