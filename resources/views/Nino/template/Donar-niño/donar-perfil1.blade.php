     <!-- Datos Personales-->	
<div class="row perfil1">
		<center>
			<h3>{{ ucfirst(trans($nino->nombre)) }} {{ ucfirst(trans($nino->apellido)) }}</h3>
			<p>{{$nino->situacion_actual}}</p>
		</center> 
    <hr>
	  <div class="col-sm-4 pc1"><!-- Datos Personales-->
				<h5>Fecha de Nacimiento:</h5>
				<p>{{$nino->fecha_nacimiento}}</p>
				<h5>Estado: </h5>
				 @foreach($nino->contactos as $aux)
	              <?php if ($aux->nombre=='Estado') {?>
	                <p> {{$aux->pivot->valor}} </p>
	              <?php }?>  
	             @endforeach
				<h5>Municipio:</h5>
				 @foreach($nino->contactos as $aux)
	              <?php if ($aux->nombre=='Municipio') {?>
	                <p> {{$aux->pivot->valor}} </p>
	             <?php }?>  
	             @endforeach
	 </div>
	<div class="col-sm-4 pc2"><!-- Datos Cancer-->
				<div class="row">
               		<div class="col-sm-6 pc2">
                		<h5>Tipo de Cáncer</h5>
               		</div>
               		<div class="col-sm-6 pc2">
                		<h5>Fecha de Nacimiento</h5>
                	</div>
                </div>
                @foreach($nino->cancers as $aux)
                	<div class="row">
                		<div class="col-sm-6 pc2">
                			<p style="text-align: center;"><b>{{$aux->nombre}}</b></p>
                		</div>
                		<div class="col-sm-6 pc2">
                			<p style="text-align: center;">{{$aux->pivot->fecha_deteccion}}</p>
                		</div>
                    </div>
           		@endforeach		 
	</div><!-- Fin-->
	<div class="col-sm-4 pc3"> <!-- Datos Contacto-->
		  	<div class="table-responsive">
				<table class="table">
				    <thead>
				      <tr>
				        <th>Contacto</th>
				        <th>Valor</th>
				      </tr>
				    </thead>
				    <tbody>
				    @foreach($nino->contactos as $aux)
				      <tr>
				      	<?php if($aux->nombre!='Estado' and  $aux->nombre!='Municipio'){ ?>
				        <td>{{$aux->nombre}}</td>
				        <td>{{$aux->pivot->valor}}</td>  
				        <?php } ?>	
				      </tr>
				    @endforeach
				    </tbody>
				  </table>
			</div>
      </div>
</div><!-- Fin datos personales-->