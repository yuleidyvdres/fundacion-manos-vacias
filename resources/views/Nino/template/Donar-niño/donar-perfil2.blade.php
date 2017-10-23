<center>
<h3>Donaciones</h3>
<?php $nino_id = $nino->id; ?>
<div class="row">
	<form class="navbar-form form-width" method="GET" action="{{ route('public.donaciones.search') }}">
		<div class="form-group">
			<input type="text" name="nombre" class="form-control border-inp" placeholder="Buscar Nombre">
		</div>
		<div class="form-group hidden">
			<input type="text" name="id" id="id" value="<?php echo $nino_id; ?>">
		</div>
		<div class="form-group">
			<input type="submit" value="Buscar" class="btn btn-default btn-md btn-submit">
		</div>
	</form>
</div>

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
		@if($act) 
			@foreach($dona as $aux)
				<tr>
					<td>{{$aux->tipo}}</td>
					<td>{{$aux->don_nom}}</td>

					<?php if ($aux->descripcion!="") { ?>
							<td>{{$aux->descripcion}}</td>
					<?php }else{ ?>
							<td>-- Sin descripción --</td>
					<?php } ?> 

					<?php if ($aux->status=="No-recibido") { ?>
							<td style="color:#FF2714;"><b>{{$aux->status}}</b></td>
					<?php }else{ ?>
							<td>{{$aux->status}}</td>
					<?php } ?>

						<?php if ($aux->comentario!="") { ?>
							<td>{{$aux->comentario}}</td>
					<?php }else{ ?>
							<td>-- Sin comentario --</td>
					<?php } ?>

					<?php if ($aux->urgencia=="Alta") { ?>
							<td style="color:#FF2714;"><b>{{$aux->urgencia}}</b></td>
					<?php }else{ ?>
							<td>{{$aux->urgencia}}</td>
					<?php } ?>
				</tr>
			@endforeach
		@else
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
		@endif
	</tbody>
</table>
</div>
</center>
