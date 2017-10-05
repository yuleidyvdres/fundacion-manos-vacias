<form>
	     <label for="Fecha_nacimiento" class="titulo">Datos Generales</label>

		  <div class="form-group">
		  	<div class="input-group input-group-md input-capsule">
		      <span class="borde-inc input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		      <input type="text" class="borde form-control" id="nombre" placeholder="Nombre y Apellido" required>
		    </div>
		  </div>

		  <div class="form-group">
		  	<label for="Fecha_nacimiento" style="text-align: left; width: 100%;">Fecha de Nacimiento</label>
		  	<div class="input-group input-group-md input-capsule">
		      <span class="borde-inc input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		      <input type="date" class="borde form-control" id="Fecha_nac" placeholder="Fecha de Nacimiento" required>
		    </div>
		  </div>

		  <div class="form-group">
		  	<div class="input-group input-group-md input-capsule">
		      <span class="borde-inc input-group-addon">Sexo</span>
		        <select class="form-control" id="Tipo-Cancer">
				    <option><i class="fa fa-mars" style="font-size:20px;color:blue">Niño</i></option>
				    <option><i class="fa fa-venus" style="font-size:48px;color:#F20982">Niña</i></option>
				</select>
		    </div>
		  </div>

		  <div class="form-group">
		  	<div class="input-group input-group-md input-capsule">
		      <span class="borde-inc input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
		        <select class="form-control" id="Tipo-Cancer">
				    <option>Tipo de Cancer</option>
				    <option>2</option>
				    <option>3</option>
				    <option>4</option>
				</select>
		    </div>
		  </div>

		  <div class="form-group">
		  	<label for="Fecha_inicio" style="text-align: left; width: 100%;">Fecha de Diagnostico</label>
		  	<div class="input-group input-group-md input-capsule">
		      <span class="borde-inc input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		      <input type="date" class="borde form-control" id="Fecha_inicio" placeholder="Fecha de Diagnostico del Cancer">
		    </div>
		  </div>

		  <div class="form-group">
		  	<label for="Avance-Cancer" style="text-align: left; width: 100%;">Avence del cancer</label>
		  	<label class="radio-inline"><input type="radio" name="optradio">Baja</label>
			<label class="radio-inline"><input type="radio" name="optradio">Media</label>
			<label class="radio-inline"><input type="radio" name="optradio">Alta</label>
		  </div>

		  <div class="form-group">
		  	<div class="input-group input-group-md input-capsule">
		      <span class="borde-inc input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
		      <textarea class="form-control" rows="3" id="SA" placeholder="Situación Actual"></textarea>
		    </div>
		  </div>
		  <button type="submit" class="btn btn-default">Agregar Paciente</button>
		  <!-- ------------------     inicio contacto -------------------------- -->
		 <label for="Fecha_nacimiento" class="titulo">Contacto</label></br>

		 <div class="form-group">
		 	<div class="contacto">
		 		<div class="form-group cuadro"><!--inicio contacto-->
				  	<div class="input-group input-group-md input-capsule"><!--contacto-->
				      <span class="borde-inc input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
				        <select class="form-control" id="Tipo-Cancer">
						    <option>Contacto</option>
						    <option>2</option>
						    <option>3</option>
						    <option>4</option>
						</select>
				    </div></br>
				    <div class="input-group input-group-md input-capsule"><!--valor-->
				      <span class="borde-inc input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
				      <input type="text" class="borde form-control" id="nombre" placeholder="Valor" required>
				    </div>
				</div><!-- fin contacto-->
			</div>
		    <div><!--boton de +-->
			<center><button class="btn btn-info btn-agg btn-md" id="contacto" type="button">+</button></center>
			</div> </br></br>
			<button type="submit" class="btn btn-default">Guardar contacto</button>
		  </div>
		  
		  <label for="Fecha_nacimiento" class="titulo">Insumos y Medicamentos</label> <!--INSUMOS-->
		   <div class="form-group">
		 	@include('template.Insumos')
		 </br></br>
		 	<button type="submit" class="btn btn-default">Guardar Insumos</button>
		  </div><!-- fin de insumo -->
		  
</form>