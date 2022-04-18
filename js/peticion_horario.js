function agregarHorario(){
    console.log("fdasd");
    var datos =$('#formularioh').serialize();

    $.ajax({
        
        method:"POST",
        url:"registro_horario.php",
        data: datos,
        success: function(e){
        }  
        
    });
    //location.href ="/Proyecto/Proyecto_cine/registro_sala.php";
}

