var guardado = JSON.parse(sessionStorage.getItem('pqrs'));

console.log(guardado);

console.log(guardado.PQRs[0].asunto_pqr);

var contenido = document.getElementById("datospqr1");


for(let valor of guardado.PQRs){
    contenido.innerHTML += `
        <tr> 
            <td>hola</td> 
            <td>${ valor.asunto_pqr }</td>
            <td>wert</td>
            <td>34t</td>
            <td>w4t4t</td> 
        </tr>`;
}
