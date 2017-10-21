<form method="POST" class="form-width" action="{{ route('Niño.store_contacto') }}"><!--inicio Datos Generales-->
     {{ csrf_field() }} 
<div id="Estado3" class="container">

			 <label class="titulo">Contacto</label></br>

			  <div class="form-group" style="display: none;">
						<div class="input-group input-group-md input-capsule">
							<span class="borde-inc input-group-addon">
								<i class="fa fa-id-card" aria-hidden="true"></i>
							</span>
							<input type="text" class="borde form-control" id="solicitud" name="solicitud" placeholder="Fecha de Diagnóstico del Cáncer" value="{{$var}}" onfocus="this.blur()">
						</div>
			  </div>

			 	<div class="form-group">
						<div class="input-group input-group-md input-capsule">
							<span class="borde-inc input-group-addon">
								<i class="fa fa-id-card" aria-hidden="true"></i>
							</span>
							<input type="text" class="borde form-control" id="partida" name="partida" placeholder="Fecha de Diagnóstico del Cáncer" value="{{$partida}}" onfocus="this.blur()">
						</div>
			  </div>

			 <div class="form-group">
			 	<div class="contacto">
			 		<div class="form-group cuadro">
					  	<div class="input-group input-group-md input-capsule">
					      <span class="borde-inc input-group-addon">
									<i class="fa fa-address-card" aria-hidden="true"></i>
						  </span>
						 {!! Form::select('Tipo_contacto',$contacto, null,['class'=>'form-control','required'] )!!}
					  
					    </div>
					    </br>
					    <div class="input-group input-group-md input-capsule">
					        <span class="borde-inc input-group-addon">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</span>
							<?php if ($contacto=="Telefono") { ?>
								<input type="text" class="borde form-control" id="valor_cont" name="valor_cont" placeholder="Valor"  minlength="11" maxlength="11" required>
							<?php } else{ ?>
								<input type="text" class="borde form-control" id="valor_cont" name="valor_cont" placeholder="Valor" required>
							<?php } ?>
							
					    </div>
					</div>
				</div> 
			  </div></br></br>
			  	<?php if ($var=='nuevo') { ?>
				<center>
					<a href="{{route('Niño.create_donacion',['id' => $partida, 'var'=>'nuevo'])}}" class="btn btn-default" id="botonSiguienteEstado1">Siguiente</a>
				</center>	
				<?php } else{ ?>
				<center>
					<a  href="{{ route('Niño.index') }}" class="btn btn-default" id="botonSiguienteEstado2">Perfil Niño</a>
   			    </center>
				<?php } ?>
			 </br>
			 <center>
	         	<input type="submit" value="Agregar Contacto" id="btn-agregar" class="btn btn-default btn-md btn-submit">
	        </center>
	        </br></br>
	</div> 
</form>