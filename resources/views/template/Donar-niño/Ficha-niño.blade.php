<div class="container-fluid ficha">
  <div class="row">
        <div class="col-sm-4 img1"><img src="{{asset('imagenes/chica.png')}}" alt="Avatar"></div>
        <div class="col-sm-8">
            <h2>Nombre del niño</h2>
            <p>Situación Actual: Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Molestiae ullam eveniet officiis</p>
        </div>
  </div>
  <hr>
  <div class="row">
        <div class="col-sm-6 datos">
            <h4>Edad</h4>
            <h4>Ubicación</h4>
            <h4>Estado:</h4>
            <h4>Parroquia:</h4>
            <h4>Tipo de Cáncer</h4>
            <p>Leucemia</p>
            <h4>Donación:</h4>
        </div>
        <div class="col-sm-6">
            <p>10</p>
            </br>
            <p>Barinas</p>
            <p>Barinas</p>
            <h4>Diagnóstico</h4>
            <p>25/9/2014</p>
            <p>URGENTE</p>
        </div>
  </div>
  <hr>
  <div class="Etapa del Cancer"> <center>
        <h4>Etapa del Cáncer</h4>
		<div style="width:50%">
            <div class="progress">
				<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width:35%">
					Etapa I
				</div>
			</div>
	    </div> </center>
  </div>
  <div><center> 
  <a href="{{ url('/Donar-perfil') }}" class="btn btn-default donar">Donar</a>
  </div></center>
</div>