<div class="insumos">
		 		<div class="form-group cuadro"> <!-- inicio insumo -->
		 			<div class="input-group input-group-md input-capsule"> <!--tipo -->
				      <span class="borde-inc input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
				        <select class="form-control" id="Tipo-Cancer">
						    <option>Tipo</option>
						    <option>Insumo</option>
						    <option>Medicamento</option>
						</select>
				    </div></br>
				  	<div class="input-group input-group-md input-capsule"> <!--Insumo o Medicamento-->
				      <span class="borde-inc input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
				        <select class="form-control" id="Tipo-Cancer">
						    <option>1</option>
						    <option>2</option>
						    <option>3</option>
						    <option>4</option>
						</select>
				    </div></br>
				    <div class="input-group input-group-md input-capsule"><!-- Valor -->
				      <span class="borde-inc input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
				      <input type="text" class="borde form-control" id="nombre" placeholder="Valor" required>
				    </div></br>
				    <div class="input-group input-group-md input-capsule"><!-- Descripcion -->
				      <span class="borde-inc input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
				      <textarea class="form-control" rows="3" id="DP" placeholder="Descripción del Producto"></textarea>
				    </div></br>
				    <div class="input-group input-group-md input-capsule" style="width: 100%;"><!-- Urgencia -->
					  	<label for="Avance-Cancer" style="text-align: left; width: 100%;">Urgencia</label>
					  	<label class="radio-inline"><input type="radio" name="optradio1">Baja</label>
						<label class="radio-inline"><input type="radio" name="optradio1">Media</label>
						<label class="radio-inline"><input type="radio" name="optradio1">Alta</label>
					</div></br>
					<div class="input-group input-group-md input-capsule" style="width: 100%;"><!-- Estado -->
					  	<label for="Avance-Cancer" style="text-align: left; width: 100%;">Estado</label>
					  	<label class="radio-inline"><input type="radio" name="optradio2">Requerido</label>
						<label class="radio-inline"><input type="radio" name="optradio2" disabled>Entregado</label>
					</div>
			</div> <!-- fin de insumo -->
		</div>
	<div><!-- boton + -->
	<center><button class="btn btn-info btn-agg btn-md" id="insumos" type="button">+</button></center>
	</div>