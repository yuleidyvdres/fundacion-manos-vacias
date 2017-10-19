<nav class="navbar navbar-default">
  <div class="container-fluid c1">
    <div class="row">
      <div class="col-sm-4 col1">
        <center>
          <img src="{{asset('imagenes/bloques.png')}}" alt="Cabecera-carcer-infantil">
          <img src="{{asset('imagenes/bloques1.png')}}" alt="Cabecera-carcer-infantil">
        </center>
      </div>
      <div class="col-sm-4 col2">
        <center>
          <h1>Ayudando Manos Vacías</h1>
          <p>Porque los niños no pueden luchar contra el cáncer solos</p>
        </center>
      </div>
      <div class="col-sm-4 col3"> 
        <center>
          <img src="{{asset('imagenes/rompecabezas.png')}}" alt="Cabecera-carcer-infantil">
          <img src="{{asset('imagenes/robot.png')}}" alt="Cabecera-carcer-infantil">
        </center>
      </div>
    </div>
  </div>
  <div class="container-fluid c2">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <p><img src="{{asset('imagenes/cinta.png')}}" alt="Logo-carcer-infantil">
        AMV</p>
      </a>
    </div> 
    <ul class="nav navbar-nav">
      <li class="{{ Request::is('/') ? 'active' : null }}"><a href="{{ url('/') }}">Inicio</a></li>
      @if(Auth::check())
        <li class="{{ Request::is('Niños*') ? 'active' : null }}"><a href="{{ url('/Niños') }}">Niños</a></li>
      @endif
      @if(!Auth::check())
        <li><a href="{{ url('Donacion') }}">Donaciones</a></li>
        <li><a id="botonIniciar">Iniciar Sesión</a></li>
        <li><a href="{{ route('representante.create') }}">Registrarse</a></li>
      @endif
      @if(Auth::check())
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ Auth::user()->nombre }}<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/representante/logout') }}">Cerrar Sesión</a></li>
            </ul>
          </li>
        </ul>
      @endif
    </ul>
  </div>
</nav>
@include('auth.login')