function agregarHorario(){
    console.log("fdasd");
    var datos =$('#formularioh').serialize();

    $.ajax({
        
        method:"POST",
        url:"/administracion/registro_horario.php",
        data: datos,
        success: function(e){
        }  
    });

}