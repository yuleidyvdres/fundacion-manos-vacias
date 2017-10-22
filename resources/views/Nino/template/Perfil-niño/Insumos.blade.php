<form method="POST" class="form-width" action="{{ route('Niño.store_donacion') }}">
	 {{ csrf_field() }} 
<div id="Estado4" class="container">
<label class="titulo">Agregar Donación</label></br>
    <div class="insumos">

		 		
				    <label style="text-align: left; width: 100%;">Medicamento o Insumo que necesita</label></br>

				    <div class="form-group">
						<div class="input-group input-group-md input-capsule">
							<span class="borde-inc input-group-addon">
								<i class="fa fa-id-card" aria-hidden="true"></i>
							</span>
							<input type="text" class="borde form-control" id="partida" name="partida" placeholder="Fecha de Diagnóstico del Cáncer" value="{{$partida}}" onfocus="this.blur()">
						</div>
			        </div>

				  	<div class="input-group input-group-md input-capsule"> <!--Insumo o Medicamento-->
				      <span class="borde-inc input-group-addon">
								<i class="fa fa-file-text-o" aria-hidden="true"></i>
							</span>
							{!! Form::select('Donacion',$donacion, null,['class'=>'form-control','required'] )!!}
				    </div></br>
					<div class="form-group">
					  	<div class="input-group input-group-md input-capsule">
							  <span class="input-group-addon borde-inc" id="inputUsuario">
			             		<i class="fa fa-asterisk" aria-hidden="true"></i>
			                  </span>
					      <input type="number" class="borde form-control" id="cantidad" name="cantidad" placeholder="Cantidad Requerida" min=1 required>
					    </div>
				    </div>

				    <div class="input-group input-group-md input-capsule"><!-- Descripcion -->
				      <span class="borde-inc input-group-addon">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</span>
				      <textarea class="form-control" rows="3" id="DP" name="DP" placeholder="Descripción del Producto"></textarea>
				    </div></br>
				    <div class="input-group input-group-md input-capsule" style="width: 100%; padding: 10px;"><!-- Urgencia -->
					  	<label for="Avance-Cancer" style="text-align: left; width: 100%;">Urgencia</label>
					  	<select class="form-control" id="Urgencia" name="Urgencia" required>
									<option>Baja</option>
									<option>Mediana</option>
									<option>Alta</option>
						</select>
					</div></br>
			</div> <!-- fin de insumo -->
		</div>
	<center>
		<a  href="{{ route('Niño.index') }}" class="btn btn-default" id="botonSiguienteEstado2">Perfil Niño</a>
	</center>
	</br></br>
	<center>
		<input type="submit" value="Agregar Donación" id="btn-agregar" class="btn btn-default btn-md btn-submit">
    </center>
	</br></br>
</div>
</form>
