var guardado = JSON.parse(sessionStorage.getItem('pqrs'));

console.log(guardado);

console.log(guardado.PQRs[0].asunto_pqr);

var contenido = document.getElementById("datospqr1");
/*
for(i = 0; i < guardado.PQRs.length; i++){
    var text = "";
    text +=guardado.PQRs[i].asunto_pqr;
    console.log(text);
}*/

for(let i = 0; i < guardado.PQRs.length; i++){
    /*var text = "";
    text +=i;*/
    contenido.innerHTML += `
        <tr> 
            <td>${ guardado.PQRs[i].asunto_pqr+i }</td> 
            <td>${ guardado.PQRs[i].descripcion_pqr }</td>
            <td>${ guardado.PQRs[i].estado_pqr }</td>
            <td>${ guardado.PQRs[i].fecha_pqr }</td>
            <td><a href="" onclick="verpqr1(${ i })" >Ver</a> | <h1  onclick="eliminarpqr(${ guardado.PQRs[i].Id_pqr })" href="">Elimiar</h1></td> 
        </tr>`;
}

function verpqr1(e){
    alert("ver pqr");
    console.log(e);
}

function eliminarpqr(z){
    let paraborrar = {
        idpqr: z
    }
    fetch('http://localhost:8080/ProyectoLawpRemasterizado/ApiPhp/controlador/apipqr.php',{
        method: 'DELETE',
        body: JSON.stringify( paraborrar ),
        headers: {
            "Content-type": "application/json"
            //"Accept": "application/json"
        }
    }).then(res => res.text())
    .then(data2 => {
        console.log(data2);
    });
}

/*
for(let valor of guardado.PQRs){
    contenido.innerHTML += `
        <tr> 
            <td>${ valor.asunto_pqr }</td> 
            <td>${ valor.descripcion_pqr }</td>
            <td>${ valor.estado_pqr }</td>
            <td>${ valor.fecha_pqr }</td>
            <td><h1 href="" onclick="verpqr1(${ 'a' })" >Ver</h1> | <a onclick="eliminarpqr()" href="">Elimiar</a></td> 
        </tr>`;


         onclick="eliminarpqr(${ guardado.PQRs[i].Id_pqr })"
}
*/
