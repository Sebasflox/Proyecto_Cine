var incremetador = 0;

document.querySelector("#agregar").onclick= function () {
    let cedula = document.querySelector("#Cedula").value;
    let nombre = document.querySelector("#Nombre").value;
    let Titulo = document.querySelector("#Titulo").value;
    let Asiento = document.querySelector("#Asiento").value;
    let Total = document.querySelector("#Total").value;

    document.querySelector("#datosTabla").innerHTML += `
        <tr id="${incremetador}">
            <td>${cedula}</td>
            <td>${nombre}</td>
            <td>${Titulo}</td>
            <td>${Asiento}</td>
            <td>${Total}</td>

            <td><a class="editar"><img class="edit" src="img/edit.gif"/></a></td>
            <td><a style="cursor:pointer" class="elimina )"><img class="delete" src="img/delete.png" /onclick=Delete(${incremetador})></a></td>
        </tr>
        `;

    incremetador+=1;
    limpiar();
    document.querySelector("#Cedula").focus();
   
}


function limpiar(){
    document.querySelector("#Cedula").value="";
    document.querySelector("#Nombre").value="";
    document.querySelector("#Titulo").value="";
    document.querySelector("#Asiento").value="";
    document.querySelector("#Total").value="";
}


function Delete(incremetador){
    document.getElementById(incremetador).innerHTML = ""
    
    }
    
