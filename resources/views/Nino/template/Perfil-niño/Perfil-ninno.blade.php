<div class="container ninno" id="<?php echo $nin->id ?>" > <!-- Inicio Ni;os-->
     <!-- Datos Personales-->	
  <div class="row perfil1">
    <center>
    	<h3>{{ ucfirst(trans($nin->nombre)) }} {{ ucfirst(trans($nin->apellido)) }}</h3>
    </center> 
		  <div class="col-sm-3 pc1"><!-- Datos Personales-->
		    <center>
			  <?php if ($nin->genero=='Niña') {?>
	          	<img width='30%' src="{{asset('imagenes/muneca.png')}}" alt="Avatar">
	          <?php }else{ ?>
	          	<img width='30%' src="{{asset('imagenes/futbol.png')}}" alt="Avatar">
	          <?php }?>
			  </br>
					<h4>Nacimiento: </h4>
					<p>{{$nin->fecha_nacimiento}}</p>
			</center>
		    
		    	<form method="GET" class="form-width" action="{{ route('Niño.edit_localizar') }}">
		    		 <div class="form-group" style="display: none;">
						<div class="input-group input-group-md input-capsule">
							<span class="borde-inc input-group-addon">
								<i class="fa fa-id-card" aria-hidden="true"></i>
							</span>
							<input type="text" class="borde form-control" id="id" name="id" placeholder="Fecha de Diagnóstico del Cáncer" value="{{$nin->id}}" onfocus="this.blur()">
						</div>
			  	     </div>
					<h5><b>Estado</b> </h5>
			           <div class="input-group input-group-md input-capsule">
							<select class="form-control" id="Estado" name="Estado" required>
									 @foreach($nin->contactos as $aux)
						              <?php if ($aux->nombre=='Estado') {?>
						              <option>{{$aux->pivot->valor}}</option>
						              <?php }?>  
						             @endforeach
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
									<option>Guárico</option>
									<option>Lara</option>
									<option>Mérida</option>
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
		       <!-- Datos Personales-->
					<h5><b>Municipio</b></h5>
		             	<div class="form-group">
							<div class="input-group input-group-md input-capsule">
									<select class="form-control" id="Municipio" name="Municipio" required>
										@foreach($nin->contactos as $aux)
							              <?php if ($aux->nombre=='Municipio') {?>
							               <option> {{$aux->pivot->valor}}</option>
							             <?php }?>  
							             @endforeach
										<option>3</option>
										<option>1</option>
										<option>2</option>
									</select>
							</div>
			  			</div>
		        
		        <div class="form-group">
					 <center>
				         <input type="submit" value="Editar Localización" id="btn-agregar" class="btn btn-default btn-md btn-submit">
				     </center>			
				</div>
		        </form>
		  </div>
		  <div class="col-sm-4 pc2"><!-- Datos Cancer-->
		  		<div class="table-responsive">
				<table class="table">
				    <thead>
				      <tr>
				        <th>Cáncer</th>
				        <th>Detección</th>
				        <th></th>
				      </tr>
				    </thead>
				    <tbody>
				      @foreach($nin->cancers as $aux)
				      <tr>
				        <td><p><b>{{$aux->nombre}}</b></p></td>
				        <td><p>{{$aux->pivot->fecha_deteccion}}</p></td>  
				         <td>
				         	<?php if($aux->pivot->activar==1){ ?>
								<a href="{{route('Niño.edit_cancer',['id' => $nin->id, 'can'=>$aux->id, 'act'=>'0'])}}"  class="btn btn-success btn-sm active">
									<i class="fa fa-check" aria-hidden="true"></i>
								</a>
 							<?php } else{ ?>
								<a href="{{route('Niño.edit_cancer',['id' => $nin->id, 'can'=>$aux->id, 'act'=>'1'])}}"  class="btn btn-danger btn-sm active">
									<i class="fa fa-times" aria-hidden="true"></i>
								</a>
 							<?php } ?>
				        	
				        </td>
				      </tr>
				     @endforeach
				    </tbody>
				  </table>
		  	<div>
					<div class="form-group">
						<div class="cancer-tipo2"> </div>
						<center>
								<a href="{{route('Niño.create_cancer',['id' => $nin->id, 'var'=>'agregar'])}}" class="btn btn-default" id="botonSiguienteEstado1">Agregar Cancer</a>
						</center>			
					</div>
		  	</div>
	    </div></div><!-- Fin-->
		  <div class="col-sm-5 pc3"> <!-- Datos Contacto-->
		  	<div class="table-responsive">
				<table class="table">
				    <thead>
				      <tr>
				        <th>Contacto</th>
				        <th>Valor</th>
				        <th>Actualizar</th>
				      </tr>
				    </thead>
				    <tbody>
				      @foreach($nin->contactos as $aux)
				      <tr>
				      <?php if($aux->nombre!='Estado' and  $aux->nombre!='Municipio'){ ?>
				        <td>{{$aux->nombre}}</td>
				        <td>{{$aux->pivot->valor}}</td>  
				         <td>
				        	<a href="{{ route('Niño.destroy_contacto', ['id' => $aux->pivot->id]) }}" class="btn btn-danger btn-sm active">
								  	<i class="fa fa-trash" aria-hidden="true"></i>
				        	</a>
				        </td>
				        <?php } ?>	
				      </tr>
				     @endforeach
				    </tbody>
				  </table>
			</div>
		    
        		<div class="form-group">
        			<div class="contacto2"></div>
				 		<center>	
							<a href="{{route('Niño.create_contacto',['id' => $nin->id, 'var'=>'agregar'])}}" class="btn btn-default" id="botonSiguienteEstado1">Agregar Contacto</a>
						</center>
				</div>
     
		  </div> <!-- fin contacto-->
		</div><!-- Fin datos personales--> 
    <div class="insumo-perfil">@include('Nino.template.Perfil-niño.Insumos-perfil-paciente')</div>
  </div>