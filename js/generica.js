
function cambiarEstado(button){
    if (button.classList.contains("Rosado")){
        button.classList.remove("Rosado");
    } else{
        button.classList.add("Rosado");
    }
    
}

function comprarAsientos(Titulo, Horario, Sala){
    a = document.querySelectorAll(".Rosado"); 
    compras = [];
    for (var i = 0; i < a.length; i++) {
        compras.push(a[i].dataset.id);
    }

    $.ajax({
        type: "POST",
        url: "butacaOcupada.php",
        data: {Lista: compras, Titulo: Titulo, Horario: Horario, Sala:Sala},
        success: function(msg){
            location.href ="/Cine_Fernando/comprasCliente.php";
        }
    });
}