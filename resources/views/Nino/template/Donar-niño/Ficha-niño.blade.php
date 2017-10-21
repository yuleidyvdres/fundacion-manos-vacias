<div class="container-fluid ficha">
<div class="row">
      
       
      <?php if ($nin->genero=='Niña') {?>
        <div class="col-sm-4 img1"><img width='90%' src="{{asset('imagenes/muneca.png')}}" alt="Avatar"></div>
      <?php }else{ ?>
        <div class="col-sm-4 img1"><img width='90%' src="{{asset('imagenes/futbol.png')}}" alt="Avatar"></div>
      <?php }?>
  
      <div class="col-sm-8">
          <h2>{{ ucfirst(trans($nin->nombre)) }} {{ ucfirst(trans($nin->apellido)) }}</h2>
          <p>{{ substr($nin->situacion_actual, 0, 25) }} ...</p>
      </div>
</div>
<hr>
<div class="row contenido">
      <div class="col-sm-6 datos">
          <h4>Edad</h4>
          <h4>Estado:</h4>
          <h4>Municipio:</h4>
           <hr>
          <h4>Tipo de Cáncer</h4>
          <?php $var=0; ?>
          @foreach($nin->cancers as $aux)
            <?php if ($var==0) { $var++;?>
              <p> {{$aux->nombre}} </p> 
             <?php } ?> 
          @endforeach
      </div>
      <div class="col-sm-6">
          <p>{{$nin->edad() }}</p>

          @foreach($nin->contactos as $aux)
            <?php if ($aux->nombre=='Estado') {?>
              <p> {{$aux->pivot->valor}} </p>
           <?php } ?>  
          @endforeach

          @foreach($nin->contactos as $aux)
            <?php if ($aux->nombre=='Municipio') {?>
              <p> {{$aux->pivot->valor}} </p>
           <?php }?>  
          @endforeach

          
          <hr>
          <h4 style="color:#004E89;">Diagnóstico</h4>
          <?php $var=0; ?>
          @foreach($nin->cancers as $aux)
           <?php if ($var==0) { $var++;?>
              <p> {{$aux->pivot->fecha_deteccion}} </p>  
            <?php } ?>
          @endforeach
      </div>
</div>
  <div >
    <center> 
      <?php $var=0; ?>
     @foreach($nin->donaciones as $aux)
        <?php if ($aux->pivot->urgencia=='Alta' and $var==0) { $var++;?>
         <h4 style="color:#FF2714;"><b>Se necesita Donacion Urgente</b></h4>
        <?php }else{  
          if($var==0){ $var++; ?>
         <h4>Haz Feliz a un Niño, ¡Ayuda!</h4>
       <?php }} ?>
     @endforeach
    </center>
  </div>
<hr>
<div><center> 
<a href="{{ route('Niño.perfil_publico',['id' => $nin->id]) }}" class="btn btn-default donar">Perfil del Niño</a>
</div></center>
</div>