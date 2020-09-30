
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

    fetch('http://localhost:8080/ProyectoLawpRemasterizado/ApiPhp/controlador/api.php',{
        method: 'POST',
        body: JSON.stringify( listarDatos() ),
        headers: {
            "Content-type": "application/json"
            //"Accept": "application/json"
        }
    }).then(res => res.text())
    .then(data => console.log(data));
}


