<center>
        	<h3>Donaciones</h3>
        	<div class="table-responsive perfil2">
        		 <table class="table table-striped">
				    <thead>
				      <tr>
				        <th>Tipo</th>
				        <th>Nombre</th>
				        <th>Descripción</th>
				        <th>Estado</th>
				        <th>Comentario</th>
                        <th>Urgencia</th>
				      </tr>
				    </thead>
				    <tbody>
                     @foreach($nino->donaciones as $aux)
    				      <tr>
    				        <td>{{$aux->tipo}}</td>
                            <td>{{$aux->nombre}}</td>

                            <?php if ($aux->pivot->descripcion!="") { ?>
                                <td>{{$aux->pivot->descripcion}}</td>
                            <?php }else{ ?>
                                <td>-- Sin descripción --</td>
                            <?php } ?> 

                            <?php if ($aux->pivot->status=="No-recibido") { ?>
                                <td style="color:#FF2714;"><b>{{$aux->pivot->status}}</b></td>
                            <?php }else{ ?>
                                <td>{{$aux->pivot->status}}</td>
                            <?php } ?>

                             <?php if ($aux->pivot->comentario!="") { ?>
                                <td>{{$aux->pivot->comentario}}</td>
                            <?php }else{ ?>
                                <td>-- Sin comentario --</td>
                            <?php } ?>

                            <?php if ($aux->pivot->urgencia=="Alta") { ?>
                                <td style="color:#FF2714;"><b>{{$aux->pivot->urgencia}}</b></td>
                            <?php }else{ ?>
                                <td>{{$aux->pivot->urgencia}}</td>
                            <?php } ?>
    				     </tr>
                     @endforeach
				    </tbody>
				  </table>
        	</div>
		</center>

