@extends('layouts.app')
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/donacion.css') }}">
	<link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    
@endsection

@section('content')
    @include('layouts.common.navbar')
    <div class="container-fluid">
        <div class="buscar">
         <div class="input-group">
           <input type="text" class="form-control" placeholder="Buscar">
            <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
                 <i class="fa fa-search" aria-hidden="true"></i>
            </button>
            </div>
         </div>    
        </div>
        <div class="row">
           @foreach($nino as $nin)  
            <div class="col-sm-4">@include('Nino.template.Donar-niño.Ficha-niño')</div>
           @endforeach
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