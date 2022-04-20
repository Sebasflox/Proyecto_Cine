
function cambiarEstado(button){
    if (button.classList.contains("Rosado")){
        button.classList.remove("Rosado");
    } else{
        button.classList.add("Rosado");
    }
    
}





function comprarAsientos(Titulo, Horario, Sala, Precio){
    a = document.querySelectorAll(".Rosado"); 
    compras = [];
    for (var i = 0; i < a.length; i++) {
        compras.push(a[i].dataset.id);
    }

    $.ajax({
        type: "POST",
        url: "butacaOcupada.php",
        data: {Lista: compras, Titulo: Titulo, Horario: Horario, Sala:Sala, Precio:Precio},
        success: function(msg){
            var doc = new jsPDF('landscape');
            doc.text(20, 20, 'Gracias por comprar en Fernando');
            doc.text(20, 30, 'Compro boletos para la pelicula '+Titulo);
            doc.text(20,40,'Hora: '+Horario);
            doc.text(20,50, 'Sala: '+Sala);
            doc.text(20,60, 'Su total a pagar fue: '+compras.length*Precio);

            doc.save('Compra.pdf');

            window.location.href="compras_Clientes.php";
        }
    });
}