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

for(i = 0; i < guardado.PQRs.length; i++){
    var text = "";
    text +=i;
    contenido.innerHTML += `
        <tr> 
            <td>${ guardado.PQRs[i].asunto_pqr+i }</td> 
            <td>${ guardado.PQRs[i].descripcion_pqr }</td>
            <td>${ guardado.PQRs[i].estado_pqr }</td>
            <td>${ guardado.PQRs[i].fecha_pqr }</td>
            <td><h1 href="" onclick="verpqr1(${ 'i' })" >Ver</h1> | <a onclick="eliminarpqr()" href="">Elimiar</a></td> 
        </tr>`;
}

function verpqr1(e){
    let q = e;
    alert("ver pqr");
    console.log(q);
}

function eliminarpqr(){
    alert("borrar pqr");
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
}
*/
