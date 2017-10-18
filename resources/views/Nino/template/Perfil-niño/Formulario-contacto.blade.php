<form method="POST" class="form-width" action="{{ route('Niño.store_contacto') }}"><!--inicio Datos Generales-->
     {{ csrf_field() }} 
<div id="Estado3" class="container">

			 <label class="titulo">Contacto</label></br>

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
							<?php }  
							// ^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$ -> Email?>
							
					    </div>
					</div>
				</div> 
			  </div></br></br>
			  <center>
			  	<a  href="{{ route('Niño.create_donacion',['id' => $partida]) }}" class="btn btn-default" id="botonSiguienteEstado2">Siguiente</a>
			  </center>	
			 </br>
			 <center>
	         	<input type="submit" value="Agregar Contacto" id="btn-agregar" class="btn btn-default btn-md btn-submit">
	        </center>
	        </br></br>
	</div> 
</form>