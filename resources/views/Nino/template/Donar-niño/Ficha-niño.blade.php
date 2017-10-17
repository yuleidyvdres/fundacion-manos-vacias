<div class="container-fluid ficha">
  <div class="row">
        
          
        <?php if ($nin->genero=='Niña') {?>
          <div class="col-sm-4 img1"><img width='90%' src="{{asset('imagenes/muneca.png')}}" alt="Avatar"></div>
        <?php }else{ ?>
          <div class="col-sm-4 img1"><img width='90%' src="{{asset('imagenes/futbol.png')}}" alt="Avatar"></div>
        <?php }?>
    
        <div class="col-sm-8">
            <h2>{{$nin->nombre}} {{$nin->apellido}}</h2>
            <p>{{$nin->situacion_actual}}</p>
        </div>
  </div>
  <hr>
  <div class="row contenido">
        <div class="col-sm-6 datos">
            <h4>Nacimiento</h4>
            <h4>Estado:</h4>
            <h4>Municipio:</h4>
             <hr>
            <h4>Tipo de Cáncer</h4>
            @foreach($nin->cancers as $aux)
                <p> {{$aux->nombre}} </p>
            @endforeach
        </div>
        <div class="col-sm-6">
            
            <p>{{$nin->fecha_nacimiento}}</p>
           

            @foreach($nin->contactos as $aux)
              <?php if ($aux->nombre=='Estado') {?>
                <p> {{$aux->pivot->valor}} </p>
             <?php }?>  
            @endforeach

            @foreach($nin->contactos as $aux)
              <?php if ($aux->nombre=='Municipio') {?>
                <p> {{$aux->pivot->valor}} </p>
             <?php }?>  
            @endforeach
            <hr>
            <h4 style="color:#004E89;">Diagnóstico</h4>
            @foreach($nin->cancers as $aux)
                <p> {{$aux->pivot->fecha_deteccion}} </p>
            @endforeach
        </div>
  </div>
    <div >
      <center> 
       @foreach($nin->donaciones as $aux)
          <?php if ($aux->pivot->urgencia=='Alta') {?>
           <h4 style="color:#FF2714;"><b>Se necesita Donacion Urgente</b></h4>
          <?php }else{ ?>
           <h4>Haz Feliz a un Niño, ¡Ayuda!</h4>
         <?php }?>
       @endforeach
      </center>
    </div>
  <hr>
  <div><center> 
  <a href="{{ route('Niño.perfil_publico',['id' => $nin->id]) }}" class="btn btn-default donar">Perfil del Niño</a>
  </div></center>
</div>