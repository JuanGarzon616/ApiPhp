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
            window.location.href = "usuario.html";
        }

    }

}