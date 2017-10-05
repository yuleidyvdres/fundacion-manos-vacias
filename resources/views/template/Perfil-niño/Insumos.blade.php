<div class="insumos">
		 		<div class="form-group cuadro"> <!-- inicio insumo -->
		 			<div class="input-group input-group-md input-capsule"> <!--tipo -->
				      <span class="borde-inc input-group-addon">
								<i class="fa fa-thermometer-quarter" aria-hidden="true"></i>
							</span>
				        <select class="form-control" id="Tipo-Cancer">
						    <option>Tipo</option>
						    <option>Insumo</option>
						    <option>Medicamento</option>
						</select>
				    </div></br>
				  	<div class="input-group input-group-md input-capsule"> <!--Insumo o Medicamento-->
				      <span class="borde-inc input-group-addon">
								<i class="fa fa-file-text-o" aria-hidden="true"></i>
							</span>
				        <select class="form-control" id="Tipo-Cancer">
						    <option>Producto</option>
						    <option>2</option>
						    <option>3</option>
						    <option>4</option>
						</select>
				    </div></br>
				    <div class="input-group input-group-md input-capsule"><!-- Descripcion -->
				      <span class="borde-inc input-group-addon">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</span>
				      <textarea class="form-control" rows="3" id="DP" placeholder="Descripción del Producto"></textarea>
				    </div></br>
				    <div class="input-group input-group-md input-capsule" style="width: 100%; padding: 10px;"><!-- Urgencia -->
					  	<label for="Avance-Cancer" style="text-align: left; width: 100%;">Urgencia</label>
					  	<label class="radio-inline"><input type="radio" name="optradio1">Baja</label>
						<label class="radio-inline"><input type="radio" name="optradio1">Media</label>
						<label class="radio-inline"><input type="radio" name="optradio1">Alta</label>
					</div></br>
					<div class="input-group input-group-md input-capsule" style="width: 100%; padding: 10px;"><!-- Estado -->
					  	<label for="Avance-Cancer" style="text-align: left; width: 100%;">Estado</label>
					  	<label class="radio-inline"><input type="radio" name="Estadp1">Requerido</label>
						<label class="radio-inline"><input type="radio" name="Estado1" disabled>Entregado</label>
					</div>
			</div> <!-- fin de insumo -->
		</div>
	<div><!-- boton + -->
	<center>
		<button class="btn btn-info btn-agg btn-md" id="insumos" type="button">
			<i class="fa fa-plus" aria-hidden="true"></i>
		</button>
	</center>
	</div>