function listarDatos(){

    let form = document.forms['login'];
    var datos = {
        mail:  form.mail.value,
        pass:  form.pass.value
    };
    console.log(datos);
    return datos;
}
function registrar(){

    fetch('http://localhost:8080/ProyectoLawpRemasterizado/ApiPhp/controlador/iniciosesion.php',{
        method: 'POST',
        body: JSON.stringify( listarDatos() ),
        headers: {
            "Content-type": "application/json"
            //"Accept": "application/json"
        }
    }).then(res => res.text())
    .then(data => {
        datos(data);
    });
    
    function datos(data){
        console.log(data);  
        var datos = JSON.parse(data);
        console.log(datos);
        console.log(datos.Usuario.num_usuario);
        if(datos.Usuario.query==false){
            alert("Datos incorrectos");
        }
        else{
            sessionStorage.setItem('user', data);

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

            window.location.href = "usuario.html";
        }

    }

}