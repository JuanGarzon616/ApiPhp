function verpqr(){

    var datos = JSON.parse(sessionStorage.getItem('user'));

    var userId = {
        numuser: datos.Usuario.num_usuario,
        tipdoc: datos.Usuario.fk_tipodocumentoid_documento
    }
    
    fetch('http://localhost:8080/ProyectoLawpRemasterizado/ApiPhp/controlador/apipqr.php?pqr=l',{
        method: 'POST',
        body: JSON.stringify( userId ),
        headers: {
            "Content-type": "application/json"
            //"Accept": "application/json"
        }
    }).then(res => res.text())
    .then(data2 => {
        datos2(data2);
    });

    function datos2(data2){
        sessionStorage.setItem('pqrs', data2); 
    }
}