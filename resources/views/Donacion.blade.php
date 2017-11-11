@extends('layouts.app')
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/donacion.css') }}">
	<link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="http://localhost:8000/css/admin/form-style.css" rel="stylesheet">
@endsection

@section('content')
    @include('layouts.common.navbar')
    <div class="container-fluid">
        <div class="row" style="margin-top: 20px;">
            <center>
                <form method="GET" action="{{ route('buscar.donacion.publico') }}" class="navbar-form form-width" style="width: 65%;">
                     <div class="row">
                        <div class="form-group col-xs-12 col-sm-3" id="input-search">
                            <div class="input-group input-group-md input-capsule" style="padding-right: 8px;">
                                <span class="borde-inc input-group-addon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </span>
                                    <select class="form-control" id="estado" name="estado" required>
                                        <option value="seleccionar">Seleccionar</option>
                                        <option value="amazonas">Amazonas</option>
                                        <option value="anzoategui">Anzoátegui</option>
                                        <option value="apure">Apure</option>
                                        <option value="aragua">Aragua</option>
                                        <option value="barinas">Barinas</option>
                                        <option value="bolivar">Bolívar</option>
                                        <option value="carabobo">Carabobo</option>
                                        <option value="cojedes">Cojedes</option>
                                        <option value="delta amacuro">Delta Amacuro</option>
                                        <option value="distrito capital">Distrito Capital</option>
                                        <option value="falcon">Falcón</option>
                                        <option value="guarico">Guárico</option>
                                        <option value="lara">Lara</option>
                                        <option value="merida">Mérida</option>
                                        <option value="miranda">Miranda</option>
                                        <option value="monagas">Monagas</option>
                                        <option value="nueva esparta">Nueva Esparta</option>
                                        <option value="portuguesa">Portuguesa</option>
                                        <option value="sucre">Sucre</option>
                                        <option value="tachira">Táchira</option>
                                        <option value="trujillo">Trujillo</option>
                                        <option value="vargas">Vargas</option>
                                        <option value="yaracuy">Yaracuy</option>
                                        <option value="zulia">Zulia</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-3">
                            <input type="number" name="edad" placeholder="edad" class="form-control border-inp" min='0'>
                        </div>
                        <div class="form-group col-xs-12 col-sm-3">
                            <input type="text" name="cancer" placeholder="Tipo Cáncer" class="form-control border-inp" min='0'>
                        </div>
                        <div class="form-group col-xs-12 col-sm-3">
                            <input type="submit" value="Buscar" class="btn btn-default btn-md btn-submit">
                        </div>
                    </div>
                </form>
            </center>
        </div>
        <!--div class="buscar">
         <div class="input-group">
           <input type="text" class="form-control" placeholder="Buscar">
            <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
                 <i class="fa fa-search" aria-hidden="true"></i>
            </button>
            </div>
         </div>    
        </div-->
        <div class="row">
            <?php $cont=0; ?>
           @foreach($nino as $nin)  
                @if($edad!=null && $edad==$nin->edad())
                    <div class="col-sm-4">@include('Nino.template.Donar-niño.Ficha-niño')</div>
                    <?php $cont++; ?>
                @else
                    @if($edad==null)
                        <div class="col-sm-4">@include('Nino.template.Donar-niño.Ficha-niño')</div>
                    @endif
                @endif
           @endforeach
        </div> 
        <center>{!! $nino->render() !!}</center>
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