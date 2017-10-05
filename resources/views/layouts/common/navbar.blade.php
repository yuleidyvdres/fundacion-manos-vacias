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
          <h1>Ayudando Manos Vacias</h1>
          <p>Por que los niños no pueden luchar contra el cancer solos</p>
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
      <li class="active"><a href="#">Inicio</a></li>
      <li><a href="{{ url('/Niños') }}">Niños</a></li>
      <li><a href="#">Iniciar Sesión</a></li>
      <li><a href="#">Registrarse</a></li>
    </ul>
  </div>
</nav>