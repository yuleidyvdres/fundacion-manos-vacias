<form><!--inicio Datos Generales-->
	    <label for="Fecha_nacimiento" class="titulo">Datos Generales</label>

		  <div class="form-group">
		  	<div class="input-group input-group-md input-capsule">
				  <span class="input-group-addon borde-inc" id="inputUsuario">
             <i class="fa fa-user" aria-hidden="true"></i>
          </span>
		      <input type="text" class="borde form-control" id="nombre" placeholder="Nombre y Apellido" required>
		    </div>
		  </div>

		  <div class="form-group">
		  	<label for="Fecha_nacimiento" style="text-align: left; width: 100%;">Fecha de Nacimiento</label>
		  	<div class="input-group input-group-md input-capsule">
				  <span class="input-group-addon borde-inc" id="input-fecha-nac">
             <i class="fa fa-calendar" aria-hidden="true"></i>
          </span>
		      <input type="date" class="borde form-control" id="Fecha_nac" placeholder="Fecha de Nacimiento" required>
		    </div>
		  </div>

		  <div class="form-group">
		  	<div class="input-group input-group-md input-capsule">
		      <span class="borde-inc input-group-addon">Sexo</span>
		        <select class="form-control" id="Sexo" required>
				    <option>Niño</option>
				    <option>Niña</option>
				  </select>
		    </div>
		  </div>
			<label style="text-align: left; width: 100%;">Ubicación</label></br>
			<div class="form-group">
					<div class="input-group input-group-md input-capsule">
						<span class="borde-inc input-group-addon">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</span>
							<select class="form-control" id="Estado" required>
								<option>Estado </option>
								<option>1</option>
								<option>2</option>
							</select>
					</div>
		  </div>

			<div class="form-group">
					<div class="input-group input-group-md input-capsule">
						<span class="borde-inc input-group-addon">
							<i class="fa fa-map-pin" aria-hidden="true"></i>
						</span>
							<select class="form-control" id="Parroquia" required>
								<option>Parroquia</option>
								<option>1</option>
								<option>2</option>
							</select>
					</div>
		  </div>

			<div class="form-group">
		  	<div class="input-group input-group-md input-capsule">
				<span class="borde-inc input-group-addon">
							<i class="fa fa-bars" aria-hidden="true"></i>
				</span>
		      <textarea class="form-control" rows="3" id="SA" placeholder="Situación Actual"></textarea>
		    </div>
		  </div>
			<button  class="btn btn-default">Agregar Paciente</button></br></br>
</form><!--fin datos generales-->
<form id="Cancer"> <!--inicio datos canceer-->
		<div class="cancer-tipo">
		<div>
		  <div class="form-group">
					<div class="input-group input-group-md input-capsule">
						<span class="borde-inc input-group-addon">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</span>
							<select class="form-control" id="Tipo-Cancer-selec" required>
								<option>Tipo de Cáncer </option>
								<option>Tipo1</option>
								<option>Tipo2</option>
								<option>Tipo3</option>
							</select>
					</div>
		  </div>

		  <div class="form-group">
		  	<label for="Fecha_inicio" style="text-align: left; width: 100%;">Fecha del Diagnóstico</label>
		  	<div class="input-group input-group-md input-capsule">
					<span class="input-group-addon borde-inc" id="input-fecha-diag">
             <i class="fa fa-calendar" aria-hidden="true"></i>
          </span>
		      <input type="date" class="borde form-control" id="Fecha_inicio" placeholder="Fecha de Diagnóstico del Cáncer">
		    </div>
		  </div>

		  <div class="form-group">
		  	<label for="Avance-Cancer" style="text-align: left; width: 100%;">Etapa del Cáncer</label>
		  	<label class="radio-inline"><input type="radio" name="Etapa">0</label>
				<label class="radio-inline"><input type="radio" name="Etapa">I</label>
				<label class="radio-inline"><input type="radio" name="Etapa">II</label>
				<label class="radio-inline"><input type="radio" name="Etapa">III</label>
		  </div>
		</div></div>
			<center>
			<button class="btn btn-info btn-agg btn-md" id="tipo-cancer" type="button">
				<i class="fa fa-plus" aria-hidden="true"></i>
			</button></br></br>
			<button  class="btn btn-default">Agregar Cáncer</button></br></br>
			</center>
</form><!--fin Cancer-->
<form><!--Inicio contacto-->
		 <label class="titulo">Contacto</label></br>

		 <div class="form-group">
		 	<div class="contacto">
		 		<div class="form-group cuadro"><!--contacto-->
				  	<div class="input-group input-group-md input-capsule">
				      <span class="borde-inc input-group-addon">
								<i class="fa fa-address-card" aria-hidden="true"></i>
							</span>
				      <select class="form-control" id="Tipo-Cancer">
						    <option>Contacto</option>
						    <option>2</option>
						    <option>3</option>
						    <option>4</option>
						  </select>
				    </div></br>
				    <div class="input-group input-group-md input-capsule"><!--valor-->
				      <span class="borde-inc input-group-addon">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</span>
				      <input type="text" class="borde form-control" id="nombre" placeholder="Valor" required>
				    </div>
				</div><!-- fin grupo contacto-->
			</div>
		    <div><!--boton de +-->
			<center>
				<button class="btn btn-info btn-agg btn-md" id="contacto" type="button">
					<i class="fa fa-plus" aria-hidden="true"></i>
				</button>
			</center>
			</div> </br></br>
			<button  class="btn btn-default">Guardar contacto</button>
		  </div>
		  </form><!-- fin Datos contacto-->
<form>
		  <label for="Fecha_nacimiento" class="titulo">Insumos y Medicamentos</label> <!--INSUMOS-->
		   <div class="form-group">
		 	@include('template.Perfil-niño.Insumos')
		 </br></br>
		 	<button  class="btn btn-default">Guardar Insumos</button>
		  </div><!-- fin de insumo -->
		  
</form>