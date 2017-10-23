
<!-- - - - - - - - - - - - - - - - - - - - - - - - -->
<form method="POST" class="form-width" action="{{ route('Niño.store') }}"><!--inicio Datos Generales-->
     {{ csrf_field() }} 
      <div id="Estado1" class="container">      
	    <label for="Fecha_nacimiento" class="titulo">Datos Generales</label>

	      <div class="form-group">
		  	<div class="input-group input-group-md input-capsule">
				  <span class="input-group-addon borde-inc" id="inputUsuario">
             <i class="fa fa-id-card" aria-hidden="true"></i>
          </span>
		      <input type="number" class="borde form-control" id="norpartida" name="norpartida" placeholder="Número de partida de Nacimiento" required>
		    </div>
		  </div>

		  <div class="form-group">
		  	<div class="input-group input-group-md input-capsule">
				  <span class="input-group-addon borde-inc" id="inputUsuario">
             <i class="fa fa-user" aria-hidden="true"></i>
          </span>
		      <input type="text" class="borde form-control" id="nombre" name="nombre" placeholder="Nombre." required>
		    </div>
		  </div>

		  <div class="form-group">
		  	<div class="input-group input-group-md input-capsule">
				  <span class="input-group-addon borde-inc" id="inputUsuario">
             <i class="fa fa-user" aria-hidden="true"></i>
          </span>
		      <input type="text" class="borde form-control" id="apellido" name="apellido" placeholder="Apellido." required>
		    </div>
		  </div>

		  <div class="form-group">
		  	<label for="Fecha_nacimiento" style="text-align: left; width: 100%;">Fecha de Nacimiento</label>
		  	<div class="input-group input-group-md input-capsule">
				  <span class="input-group-addon borde-inc" id="input-fecha-nac">
             <i class="fa fa-calendar" aria-hidden="true"></i>
          </span>
		      <input type="date" class="borde form-control" id="Fecha_nac" name="Fecha_nac" placeholder="Fecha de Nacimiento" required>
		    </div>
		  </div>

		  <div class="form-group">
		  	<div class="input-group input-group-md input-capsule">
		      <span class="borde-inc input-group-addon">Genero</span>
		        <select class="form-control" id="Sexo" name="Sexo" required>
				    <option>Niño</option>
				    <option>Niña</option>
				  </select>
		    </div>
		  </div>
		  
		   <div class="form-group">
			  	<label style="text-align: left; width: 100%;">Situación Actual</label></br>
			  	<div class="input-group input-group-md input-capsule">
					<span class="borde-inc input-group-addon"><i class="fa fa-bars" aria-hidden="true"></i>
					</span>
			      <textarea class="form-control" rows="3" id="SA" name="SA" placeholder="Situación Actual" required></textarea>
			    </div>
		  </div>

		  <label style="text-align: left; width: 100%;">Ubicación</label></br>
				<div class="form-group">
						<div class="input-group input-group-md input-capsule">
							<span class="borde-inc input-group-addon">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</span>
								<select class="form-control" id="Estado" name="Estado" onchange="Estado_municipio('Parroquia','Estado');" required>
									<option>Estado</option>
									<option>Amazonas</option>
									<option>Anzoátegui</option>
									<option>Apure</option>
									<option>Aragua</option>
									<option>Barinas</option>
									<option>Bolívar</option>
									<option>Carabobo</option>
									<option>Cojedes</option>
									<option>Delta Amacuro</option>
									<option>Distrito Capital</option>
									<option>Falcón</option>
									<option>Guarico</option>
									<option>Lara</option>
									<option>Merida</option>
									<option>Miranda</option>
									<option>Monagas</option>
									<option>Nueva Esparta</option>
									<option>Portuguesa</option>
									<option>Sucre</option>
									<option>Táchira</option>
									<option>Trujillo</option>
									<option>Vargas</option>
									<option>Yaracuy</option>
									<option>Zulia</option>
								</select>
						</div>
			  </div>

				<div class="form-group">
						<div class="input-group input-group-md input-capsule">
							<span class="borde-inc input-group-addon">
								<i class="fa fa-map-pin" aria-hidden="true"></i>
							</span>
								<select class="form-control" id="Parroquia" name="Parroquia" required>
									<option>Municipio</option>
								</select>
						</div>
			  </div>

		    <center>
	         <input type="submit" value="Agregar Niño" id="btn-agregar" class="btn btn-default btn-md btn-submit" disabled='true'>
	        </center>	
	        </br></br> 
      </div>		
</form><!-- fin Datos contacto-->
