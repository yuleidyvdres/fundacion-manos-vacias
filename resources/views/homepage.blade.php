@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
@endsection
@section('content')
    @include('layouts.common.navbar')
    @include('flash::message')
    <section class="row">
        <div id="div-esperanza" class="col-xs-12 col-sm-12 img-responsive">
            <div>
                <h3>Tiende una mano y llena de esperanza una vida</h3>
            </div>
            <img src="{{ asset('imagenes/cinta.png') }}" alt="Cáncer Infantil" class="lazo-cncr">
        </div>
    </section>
    <section class="row" id="info">
        <div class="col-xs-12 col-sm-offset-1 col-sm-5" id="block-1">
            <h2>¿A quién ayudamos?</h2>
            <p>En la Fundación Manos Vacías ayudamos a todos aquellos niños que necesitan algún tipo de medicamento o insumo para
               sus tratamientos.
            </p>
            <p>Sólo tienes que registrarte como representante y luego tendrás acceso al registro del niño junto con sus necesidades</p>
        </div>
        <div class="col-xs-12 col-sm-5" id="block-1">
            <h2>¿Por qué lo hacemos?</h2>
            <p></p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta alias perspiciatis delectus ad a odit exercitationem facere nisi doloremque non, at animi molestiae placeat quisquam, earum vitae optio velit aspernatur.</p>
        </div>
    </section>
    <?php $cont_n = 0; ?>
    @if(count($ninos) > 1)   
        <section class="row" id="urgent-supply">
            @foreach($ninos as $nino)
                @if($cont_n < 2)
                    <?php $cont = 0; ?>
                    <div class="col-xs-12 col-sm-12 col-md-5 child-card" id="right-move">
                        <div class="urgente">
                            <p>Urgente</p> 
                        </div>
                        <div class="col-xs-12 col-sm-12 sep">
                            <img src="{{ asset('imagenes/help.png') }}" alt="Ayuda" class="ayuda">
                        </div>
                        <div class="col-xs-12 col-sm-12 sep">
                            @foreach($nino->donaciones as $don)
                                @if($cont == 0 && $don->pivot->urgencia == 'Alta' && $don->pivot->status == 'No-recibido')
                                    <?php $cont++; ?>
                                    <span class="label label-info" id="donacion_urg">Donación: {{ $don->nombre }}</span>
                                    <p>Tipo: {{ $don->tipo }}</p>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            
                            <p>Nombre: {{ $nino->nombre }}</p>
                            <p>Apellido: {{ $nino->apellido }}</p>
                            <a href="{{ route('Niño.perfil_publico', ['id' => $nino->id]) }}" type="button" class="btn-mas">Saber más</a>
                            <!--button type="button" class="btn-mas" href="{{ url('/') }}">Saber más</button-->
                        </div>
                    </div>
                    <?php $cont_n++; ?>
                @endif
            @endforeach
        </section>
    @endif
    @include('layouts.common.footer')
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $("#botonIniciar").click (function () {
                $("#iniciarSesion").modal();
            });
        });
    </script>
@endsection

