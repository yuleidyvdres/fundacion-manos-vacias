$(document).ready(function(){

    $("#boton").click(function(){
        $("#panel").slideToggle("slow");
    });
});

$(document).ready(function(){
    $("#contacto").click(function(){
        $(".contacto").append('<div class="form-group cuadro"><!--contacto--><div class="input-group input-group-md input-capsule"><span class="borde-inc input-group-addon"><i class="fa fa-address-card" aria-hidden="true"></i></span><select class="form-control" id="Tipo-Cancer"><option>Contacto</option><option>2</option><option>3</option><option>4</option></select></div></br><div class="input-group input-group-md input-capsule"><!--valor--><span class="borde-inc input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span><input type="text" class="borde form-control" id="nombre" placeholder="Valor" required></div></div>');
    });
});
$(document).ready(function(){
    $("#contacto2").click(function(){
        $(".contacto2").append('<div class="form-group cuadro"><!--contacto--><div class="input-group input-group-md input-capsule"><span class="borde-inc input-group-addon"><i class="fa fa-address-card" aria-hidden="true"></i></span><select class="form-control" id="Tipo-Cancer"><option>Contacto</option><option>2</option><option>3</option><option>4</option></select></div></br><div class="input-group input-group-md input-capsule"><!--valor--><span class="borde-inc input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span><input type="text" class="borde form-control" id="nombre" placeholder="Valor" required></div></div>');
    });
});

$(document).ready(function(){
    $("#insumos").click(function(){
        $(".insumos").append('<div class="form-group cuadro"> <!-- inicio insumo --><div class="input-group input-group-md input-capsule"> <!--tipo --><span class="borde-inc input-group-addon"><i class="fa fa-thermometer-quarter" aria-hidden="true"></i></span><select class="form-control" id="Tipo-Cancer"><option>Tipo</option><option>Insumo</option><option>Medicamento</option></select></div></br><div class="input-group input-group-md input-capsule"> <!--Insumo o Medicamento--><span class="borde-inc input-group-addon"><i class="fa fa-file-text-o" aria-hidden="true"></i></span><select class="form-control" id="Tipo-Cancer"><option>Producto</option><option>2</option><option>3</option><option>4</option></select></div></br><div class="input-group input-group-md input-capsule"><!-- Descripcion --><span class="borde-inc input-group-addon"><i class="fa fa-bars" aria-hidden="true"></i></span><textarea class="form-control" rows="3" id="DP" placeholder="Descripción del Producto"></textarea></div></br><div class="input-group input-group-md input-capsule" style="width: 100%; padding: 10px;"><!-- Urgencia --><label for="Avance-Cancer" style="text-align: left; width: 100%;">Urgencia</label><label class="radio-inline"><input type="radio" name="optradio1">Baja</label><label class="radio-inline"><input type="radio" name="optradio1">Media</label><label class="radio-inline"><input type="radio" name="optradio1">Alta</label></div></br><div class="input-group input-group-md input-capsule" style="width: 100%; padding: 10px;"><!-- Estado --><label for="Avance-Cancer" style="text-align: left; width: 100%;">Estado</label><label class="radio-inline"><input type="radio" name="Estadp1">Requerido</label><label class="radio-inline"><input type="radio" name="Estado1" disabled>Entregado</label></div></div> <!-- fin de insumo -->');
    });
});
$(document).ready(function(){
    $("#insumos2").click(function(){
        $(".insumos2").append('<div class="form-group cuadro"> <!-- inicio insumo --><div class="input-group input-group-md input-capsule"> <!--tipo --><span class="borde-inc input-group-addon"><i class="fa fa-thermometer-quarter" aria-hidden="true"></i></span><select class="form-control" id="Tipo-Cancer"><option>Tipo</option><option>Insumo</option><option>Medicamento</option></select></div></br><div class="input-group input-group-md input-capsule"> <!--Insumo o Medicamento--><span class="borde-inc input-group-addon"><i class="fa fa-file-text-o" aria-hidden="true"></i></span><select class="form-control" id="Tipo-Cancer"><option>Producto</option><option>2</option><option>3</option><option>4</option></select></div></br><div class="input-group input-group-md input-capsule"><!-- Descripcion --><span class="borde-inc input-group-addon"><i class="fa fa-bars" aria-hidden="true"></i></span><textarea class="form-control" rows="3" id="DP" placeholder="Descripción del Producto"></textarea></div></br><div class="input-group input-group-md input-capsule" style="width: 100%; padding: 10px;"><!-- Urgencia --><label for="Avance-Cancer" style="text-align: left; width: 100%;">Urgencia</label><label class="radio-inline"><input type="radio" name="optradio1">Baja</label><label class="radio-inline"><input type="radio" name="optradio1">Media</label><label class="radio-inline"><input type="radio" name="optradio1">Alta</label></div></br><div class="input-group input-group-md input-capsule" style="width: 100%; padding: 10px;"><!-- Estado --><label for="Avance-Cancer" style="text-align: left; width: 100%;">Estado</label><label class="radio-inline"><input type="radio" name="Estadp1">Requerido</label><label class="radio-inline"><input type="radio" name="Estado1" disabled>Entregado</label></div></div> <!-- fin de insumo -->');
    });
});
$(document).ready(function(){
    $("#tipo-cancer").click(function(){
        $(".cancer-tipo").append(
            '<div><div class="form-group"><div class="input-group input-group-md input-capsule"><span class="borde-inc input-group-addon"><i class="fa fa-bars" aria-hidden="true"></i></span><select class="form-control" id="Tipo-Cancer-selec" required><option>Tipo de Cáncer </option><option>Tipo1</option><option>Tipo2</option><option>Tipo3</option></select></div></div><div class="form-group"><label for="Fecha_inicio" style="text-align: left; width: 100%;">Fecha de Diagnóstico</label><div class="input-group input-group-md input-capsule"><span class="input-group-addon borde-inc" id="input-fecha-diag"><i class="fa fa-calendar" aria-hidden="true"></i></span><input type="date" class="borde form-control" id="Fecha_inicio" placeholder="Fecha de Diagnóstico del Cancer"></div></div><div class="form-group"><label for="Avance-Cancer" style="text-align: left; width: 100%;">Etapa del Cáncer</label><label class="radio-inline"><input type="radio" name="Etapa">0</label><label class="radio-inline"><input type="radio" name="Etapa">I</label><label class="radio-inline"><input type="radio" name="Etapa">II</label><label class="radio-inline"><input type="radio" name="Etapa">III</label></div></div>'
        );
    });
});
$(document).ready(function(){
    $("#tipo-cancer2").click(function(){
        $(".cancer-tipo2").append(
            '<div><div class="form-group"><div class="input-group input-group-md input-capsule"><span class="borde-inc input-group-addon"><i class="fa fa-bars" aria-hidden="true"></i></span><select class="form-control" id="Tipo-Cancer-selec" required><option>Tipo de Cáncer </option><option>Tipo1</option><option>Tipo2</option><option>Tipo3</option></select></div></div><div class="form-group"><label for="Fecha_inicio" style="text-align: left; width: 100%;">Fecha de Diagnóstico</label><div class="input-group input-group-md input-capsule"><span class="input-group-addon borde-inc" id="input-fecha-diag"><i class="fa fa-calendar" aria-hidden="true"></i></span><input type="date" class="borde form-control" id="Fecha_inicio" placeholder="Fecha de Diagnóstico del Cancer"></div></div><div class="form-group"><label for="Avance-Cancer" style="text-align: left; width: 100%;">Etapa del Cáncer</label><label class="radio-inline"><input type="radio" name="Etapa">0</label><label class="radio-inline"><input type="radio" name="Etapa">I</label><label class="radio-inline"><input type="radio" name="Etapa">II</label><label class="radio-inline"><input type="radio" name="Etapa">III</label></div></div>'
        );
    });
});
/*$(document).ready(function(){
    $("#tipo-cancer1").click(function(){
        $("#Cancer")[0].reset();
    });
});*/