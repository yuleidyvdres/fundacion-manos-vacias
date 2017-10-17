<form method="POST" class="form-width" action="{{ route('Niño.store_cancer') }}"><!--inicio Datos Generales-->
     {{ csrf_field() }}
<div id="Estado2" class="container">
			<label class="titulo">Tipo de Cancer</label></br>
			
			<div class="cancer-tipo">
			<div>

			<div class="form-group">
						<div class="input-group input-group-md input-capsule">
							<span class="borde-inc input-group-addon">
								<i class="fa fa-id-card" aria-hidden="true"></i>
							</span>
							<input type="text" class="borde form-control" id="partida" name="partida" placeholder="Fecha de Diagnóstico del Cáncer" value="{{$partida}}" onfocus="this.blur()">
						</div>
			  </div>

			  <div class="form-group">
						<div class="input-group input-group-md input-capsule">
							<span class="borde-inc input-group-addon">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</span>
								{!! Form::select('Tipo_cancer',$cancer, null,['class'=>'form-control','required'] )!!}
						</div>
			  </div>

			  <div class="form-group">
			  	<label for="Fecha_inicio" style="text-align: left; width: 100%;">Fecha del Diagnóstico</label>
			  	<div class="input-group input-group-md input-capsule">
						<span class="input-group-addon borde-inc" id="input-fecha-diag">
	             <i class="fa fa-calendar" aria-hidden="true"></i>
	          </span>
			      <input type="date" class="borde form-control" id="Fecha_inicio_cancer" name="Fecha_inicio_cancer" placeholder="Fecha de Diagnóstico del Cáncer" required>
			    </div>
			  </div>
			</div>
		    </div>
				
				<center>
					<a href="{{route('Niño.create_contacto',['id' => $partida])}}" class="btn btn-default" id="botonSiguienteEstado1">Siguiente</a>
				</center></br>
				<center>
		         <input type="submit" value="Agregar Cáncer" id="btn-agregar" class="btn btn-default btn-md btn-submit">
		        </center>
		        </br></br>
				
	</div>
</form>