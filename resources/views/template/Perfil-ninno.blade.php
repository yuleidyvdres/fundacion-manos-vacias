<div class="container-fluid ninno"> <!-- Inicio Ni;os-->
     <!-- Datos Personales-->	
      	<div class="row perfil1">
      	  <center><h3>Nombre Completo Niño</h3></center> 
		  <div class="col-sm-2 pc1"><!-- Datos Personales-->
		  	<img src="{{asset('imagenes/chica.png')}}" alt="Avatar">
		    </br>
		  	<h4>Edad: 10</h4>
			<h4>Sexo: Niña</h4>
		  </div>
		  <div class="col-sm-4 pc2"><!-- Datos Cancer-->
		  	<h4>Tipo de Cancer</h4>
			<p>Leusemia</p>
			<h4>Fecha de Diagnostico</h4>
			<p>2/7/2015</p>
			<h4>Avance del cancer</h4>
			<div style="width:50%">
			<div class="progress">
			  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="25"
			  aria-valuemin="0" aria-valuemax="100" style="width:25%">
			    Bajo
			  </div>
			</div>
			</div>
		  </div>
		  <div class="col-sm-6 pc3"> <!-- Datos Contacto-->
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
				      <tr>
				        <td>Teléfono</td>
				        <td><input type="text" size="15" value="0414-xxxxxxx" name="contacto"></td>
				        <td>
				        	<button type="button" class="btn btn-primary active">
				        		<span class="glyphicon glyphicon-cog"></span>
				        	</button>
				        </td>
				      </tr>
				      <tr>
				        <td>Dirección</td>
				        <td><input type="text" size="15" value="xxxx xxxx xxx" name="contacto"></td>
				        <td>
				        	<button type="button" class="btn btn-primary active">
				        		<span class="glyphicon glyphicon-cog"></span>
				        	</button>
				        </td>
				      </tr>
				    </tbody>
				  </table>
			</div>
			<div>
        		<div class="form-group">
        			<div class="contacto2"></div>
				 	<center><button class="btn btn-info btn-agg btn-md mas" id="contacto2" type="button">+</button>
					</br></br>
					<button type="submit" class="btn btn-default">Guardar contacto</button></center>
				</div>
        	</div>
		  </div> <!-- fin contacto-->
		</div><!-- Fin datos personales--> 
    <div class="insumo-perfil">@include('template.Insumos-perfil-paciente')</div>
  </div>