@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
@endsection
@section('content')
    @include('layouts.common.navbar')

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
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat, beatae. Veniam, ut omnis ipsum similique nulla nobis consectetur quasi esse rerum beatae itaque natus cum eius facere quidem iure culpa.</p>
        </div>
        <div class="col-xs-12 col-sm-5" id="block-1">
            <h2>¿Por qué lo hacemos?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ducimus velit officiis soluta incidunt commodi facere earum vero at consequatur, ipsam, eius natus rerum impedit vel tenetur iste. Dolor, blanditiis.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta alias perspiciatis delectus ad a odit exercitationem facere nisi doloremque non, at animi molestiae placeat quisquam, earum vitae optio velit aspernatur.</p>
        </div>
    </section>
    <section class="row" id="urgent-supply">
        <div class="col-xs-12 col-sm-12 col-md-5 child-card" id="right-move">
            <div class="urgente">
                <p>Urgente</p> 
            </div>
            <div>
                <img src="{{ asset('imagenes/help.png') }}" alt="Ayuda" class="ayuda">
                <p><strong>Donación: Lorem ipsum</strong></p>
                <p>Nombre: María Pérez</p>
                <p>Edad: 12 años</p>
                <p>Cáncer: Leucemia</p>
                <p>Etapa: 1</p>
                <p>Descripción: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis aperiam nisi praesentium minima accusamus neque obcaecati, libero nesciunt necessitatibus exercitationem distinctio, sapiente animi voluptate fuga alias facere provident tempore doloremque!</p>
                <a href="{{ url('Donar-perfil') }}" type="button" class="btn-mas">Saber más</a>
                <!--button type="button" class="btn-mas" href="{{ url('/') }}">Saber más</button-->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 child-card" id="right-move">
            <div class="urgente">
                <p>Urgente</p> 
            </div>
            <div>
                <img src="{{ asset('imagenes/help.png') }}" alt="Ayuda" class="ayuda">
                <p><strong>Donación: Lorem ipsum</strong></p>
                <p>Nombre: Enmanuel Escalante</p>
                <p>Edad: 10 años</p>
                <p>Cáncer: Leucemia</p>
                <p>Etapa: 2</p>
                <p>Descripción: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis aperiam nisi praesentium minima accusamus neque obcaecati, libero nesciunt necessitatibus exercitationem distinctio, sapiente animi voluptate fuga alias facere provident tempore doloremque!</p>
                <a href="{{ url('Donar-perfil') }}" type="button" class="btn-mas">Saber más</a>
                <!--button class="btn-mas" href="#">Saber más</button-->
            </div>
        </div>
    </section>

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

