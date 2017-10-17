   /*
   DISPLAY: es la propiedad más importante para controlar estructuras. 
   Cada elemento tiene un valor de display por defecto dependiendo de qué tipo de elemento sea.
   Es comúnmente usado en JavaScript para ocultar o mostrar elementos sin eliminarlos ni recrearlos.
   Esto es diferente de visibility. Usar display: none no dejará espacio donde el elemento 
   se encontraba, pero visibility: hidden; dejará un espacio vacío.

   .className: establece o devuelve el nombre de clase de un elemento 
   (el valor del atributo de clase de un elemento). En caso de este código ella establece.

   */ 
   
   //método asigna un controlador de evento click al elemento especificado.
    document.getElementById("botonSiguienteEstado").addEventListener("click", mostrarEstado2); 
    document.getElementById("botonSiguienteEstado1").addEventListener("click", mostrarEstado3); 
    document.getElementById("botonSiguienteEstado2").addEventListener("click", mostrarEstado4); 
    function mostrarEstado2() {
        var todo_correcto = true;
        if(document.getElementById('nombre').value.length < 2 ){
            todo_correcto = false;
        }
        if(document.getElementById('apellido').value.length < 2 ){
            todo_correcto = false;
        }
        if(document.getElementById('Fecha_nac').value.length < 2 ){
            todo_correcto = false;
        }
        if(document.getElementById('SA').value.length < 2 ){
            todo_correcto = false;
        }

        if(todo_correcto==true){
        document.getElementById("Estado1").className = "container animated bounceOutLeft"; // efecto deslizante de salida para la izquierda
        
        setTimeout(function(){ 
            
            document.getElementById("Estado1").style.display = "none"; // Ocultar el elemento estado1
            document.getElementById("Estado2").style.display = "block"; // Mostrar el elemento estado2
            document.getElementById("Estado2").className = "container animated bounceInRight"; // efecto deslizante de entrada para la derecha
            
        }, 1000); //setTimeout---> Primer parámetro es la función a ejecutar y el segundo indica el número
        }        // en milisegundos antes de la ejecución 
    }

     function mostrarEstado3() {
        var todo_correcto = true;
        if(document.getElementById('Fecha_inicio_cancer').value.length < 2 ){
            todo_correcto = false;
        }
        
        if(todo_correcto==true){
        document.getElementById("Estado2").className = "container animated bounceOutLeft"; // efecto deslizante de salida para la izquierda
        
        setTimeout(function(){ 
            
            document.getElementById("Estado2").style.display = "none"; // Ocultar el elemento estado1
            document.getElementById("Estado3").style.display = "block"; // Mostrar el elemento estado2
            document.getElementById("Estado3").className = "container animated bounceInRight"; // efecto deslizante de entrada para la derecha
            
        }, 1000); //setTimeout---> Primer parámetro es la función a ejecutar y el segundo indica el número
                // en milisegundos antes de la ejecución 
        }
    }

      function mostrarEstado4() {
        var todo_correcto = true;
        if(document.getElementById('valor_cont').value.length < 2 ){
            todo_correcto = false;
        }
        
        if(todo_correcto==true){
        document.getElementById("Estado3").className = "container animated bounceOutLeft"; // efecto deslizante de salida para la izquierda
        
        setTimeout(function(){ 
            
            document.getElementById("Estado3").style.display = "none"; // Ocultar el elemento estado1
            document.getElementById("Estado4").style.display = "block"; // Mostrar el elemento estado2
            document.getElementById("Estado4").className = "container animated bounceInRight"; // efecto deslizante de entrada para la derecha
            
        }, 1000); //setTimeout---> Primer parámetro es la función a ejecutar y el segundo indica el número
        }       // en milisegundos antes de la ejecución 
     }


    
