     <!-- Datos Personales-->	
<div class="row perfil1">
		<center>
			<h3>{{$nino->nombre}} {{$nino->apellido}}</h3>
			<p>{{$nino->situacion_actual}}</p>
		</center> 
    <hr>
	  <div class="col-sm-4 pc1"><!-- Datos Personales-->
				<h4>Fecha de Nacimiento:</h4>
				<p>{{$nino->fecha_nacimiento}}</p>
				<h4>Estado: </h4>
				 @foreach($nino->contactos as $aux)
	              <?php if ($aux->nombre=='Estado') {?>
	                <p> {{$aux->pivot->valor}} </p>
	              <?php }?>  
	             @endforeach
				<h4>Municipio:</h4>
				 @foreach($nino->contactos as $aux)
	              <?php if ($aux->nombre=='Municipio') {?>
	                <p> {{$aux->pivot->valor}} </p>
	             <?php }?>  
	             @endforeach
	 </div>
	<div class="col-sm-4 pc2"><!-- Datos Cancer-->
				<h4>Tipo de Cáncer</h4>
                @foreach($nino->cancers as $aux)
                   <p> {{$aux->nombre}} </p>
           		@endforeach
				<h4>Fecha de Diagnóstico</h4>
				 @foreach($nino->cancers as $aux)
                	<p> {{$aux->pivot->fecha_deteccion}} </p>
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
				      <tr>
				        <td>Teléfono</td>
				        <td>0424-0000000</td>
				      </tr>
				      <tr>
				        <td>Dirección</td>
				        <td>A.V xx xxxxxxxxxxx</td>
                      </tr>
                      <tr>
				        <td>E-mail</td>
				        <td>xxxxxxx@gamil.com</td>
				      </tr>
				    </tbody>
				  </table>
			</div>
      </div>
</div><!-- Fin datos personales-->