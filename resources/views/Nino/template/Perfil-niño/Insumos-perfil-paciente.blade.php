<center>
	 <section class="row">
	 	<div class=" col-sm-4 search"></div>
	 	<div class=" col-sm-4 search"><h3>Donaciones</h3></div>
        <div class=" col-sm-4 search" style="padding-left: 0px">
            <form class="navbar-form form-width" method="GET" action="{{route('Niño.buscarD')}}" role="search"
            style="padding-left: 0px; padding-right: 0px; padding-top: 2%;">
                <div class="form-group">
                    <input type="text" name='nombre' id='nombre' class="form-control border-inp" placeholder="Nombre Donación">
                </div>
                <div class="form-group hidden">
					<input type="text" name="id" id="id" value="<?php echo $nin->id; ?>">
				</div>
                <div class="form-group">
                    <input type="submit" value="Buscar" class="btn btn-default btn-sm btn-submit">
                </div>
            </form>
        </div>
    </section>
        	<div class="table-responsive">
        		 <table class="table table-striped">
				    <thead>
				      <tr>
				        <th>Tipo</th>
				        <th>Nombre</th>
				        <th>Cantidad</th>
				        <th>Descripción</th>
				        <th>Urgencia</th>
				        <th>Recibido</th>
				        <th>Comentario</th>
				        <th>Acción</th>
				      </tr>
				    </thead>
				    <tbody>
			@if($act) 
				@foreach($dona as $aux)
					<?php $id_nino=$aux->nino_id; ?>
			    @endforeach 
			@else
				  <?php $id_nino=-1; ?>
			@endif

		    @if($act and $nin->id==$id_nino) 
			@foreach($dona as $aux)
				<tr>
					<td>{{$aux->tipo}}</td>
					<td>{{$aux->don_nom}}</td>
					<?php $var=0; ?>
					<td>{{$aux->cantidad}}</td>
					<?php if ($aux->cantidad!=0) { ?>
	                     <?php $var++; ?>       
	                <?php }?>

					<?php if ($aux->descripcion!="") { ?>
							<td style="width: 200px;">{{$aux->descripcion}}</td>
					<?php }else{ ?>
							<td>-- Sin descripción --</td>
					<?php } ?> 

					<?php if ($aux->urgencia=="Alta") { ?>
						<td style="color:#FF2714;"><b>{{$aux->urgencia}}</b></td>
					<?php }else{ ?>
						<td>{{$aux->urgencia}}</td>
					<?php } ?>

					<?php if ($aux->status=="No-recibido") { ?>
							<?php $var++; ?>
							<td style="color:#FF2714;"><b>{{$aux->status}}</b></td>
					<?php }else{ ?>
							<td>{{$aux->status}}</td>
					<?php } ?>

						<?php if ($aux->comentario!="") { ?>
							<td>{{$aux->comentario}}</td>
					<?php }else{ ?>
							<td>-- Sin comentario --</td>
					<?php } ?>

					 <?php if ($var!=0) { ?>
	                    <td>
							<a href="{{route('Niño.edit_donaciones',['id' => $aux->nino_id,'donacion'=>$aux->don_nom, 'urgencia'=>$aux->urgencia, 'don'=>$aux->id,'can'=>$aux->cantidad])}}" class="btn btn-primary active">
								<i class="fa fa-cog" aria-hidden="true"></i>
							</a>
						</td>
	                <?php } ?>			
				</tr>
			@endforeach
		@else
			@foreach($nin->donaciones as $aux)
					<tr>
    				        <td>{{$aux->tipo}}</td>
                            <td>{{$aux->nombre}}</td>
                            <?php $var=0; ?>
							<td>{{$aux->pivot->cantidad}}</td>
							<?php if ($aux->pivot->cantidad!=0) { ?>
	                            	<?php $var++; ?>       
	                        <?php }?>
                            <?php if ($aux->pivot->descripcion!="") { ?>
                                <td style="width: 200px;">{{$aux->pivot->descripcion}}</td>
                            <?php }else{ ?>
                                <td>-- Sin descripción --</td>
                            <?php } ?> 

                            <?php if ($aux->pivot->urgencia=="Alta") { ?>
                                <td style="color:#FF2714;"><b>{{$aux->pivot->urgencia}}</b></td>
                            <?php }else{ ?>
                                <td>{{$aux->pivot->urgencia}}</td>
                            <?php } ?>
                            
	                            <?php if ($aux->pivot->status=="No-recibido") { ?>
	                            	<?php $var++; ?>
	                                <td>{{$aux->pivot->status}}</td>
	                            <?php }else{ ?>
	                                <td>{{$aux->pivot->status}}</td>
	                            <?php } ?>

	                             <?php if ($aux->pivot->comentario!="") { ?>
	                                <td>{{$aux->pivot->comentario}}</td>
	                            <?php }else{ ?>
	                                <td>--Sin comentario--</textarea></td>
	                            <?php } ?>  

	                             <?php if ($var!=0) { ?>
	                                 <td>
							        	<a href="{{route('Niño.edit_donaciones',['id' => $nin->id,'donacion'=>$aux->nombre, 'urgencia'=>$aux->pivot->urgencia, 'don'=>$aux->pivot->id,'can'=>$aux->pivot->cantidad])}}" class="btn btn-primary active">
											  	<i class="fa fa-cog" aria-hidden="true"></i>
							        	</a>
							        </td>
	                            <?php } ?>
	                            	 
    				     </tr>
			@endforeach
		  @endif	
				    </tbody>
				  </table>
        	</div> 
        	<div class="form-group">
        		<div class="insumos2"></div>
					<center>
						<a href="{{route('Niño.create_donacion',['id' => $nin->id])}}" class="btn btn-default" id="botonSiguienteEstado1">Agregar Donación</a>
					</center>
            </div>
		</center>