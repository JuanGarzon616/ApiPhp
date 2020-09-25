//$(datos());
/*$(function(){}){
    guardar();
}*/

function listarDatos(){

    let form = document.forms['newUser'];
    var datos = {
        nam1:    form.nam1.value,
        nam2:    form.nam2.value,
        nam3:    form.nam3.value,
        nam4:    form.nam4.value,
        correo:  form.correo.value,
        direcc:  form.direcc.value,
        tele1:   form.tele1.value,
        tele2:   form.tele2.value,
        tipodoc: form.tipodoc.value,
        identi:  form.identi.value,
        pass1:   form.pass1.value
    };

    console.log(datos);

    return datos;
}
function guardar(){
    var json = JSON.stringify( listarDatos() );
    console.log(json);
}

/*
function datos(consulta){
    $.ajax({
        url: 'codigos/buscar.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},
    })
    .done(function(respuesta){
        $("#datos").html(respuesta);
    })
    .fail(function(){
        console.log("error");
    })
}


$(document).on('keyup', '#caja_busqueda', function(){
    var valor = $(this).val();
    if(valor !=" "){
        buscarDatos(valor);
    }else{
        buscar_datos();
    }
});*/

