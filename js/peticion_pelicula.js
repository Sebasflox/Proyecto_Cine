function agregarPelicula(){
    console.log("fdasd");
    var datos =$('#formularioP').serialize();

    $.ajax({
        
        method:"POST",
        url:"registro_pelicula.php",
        data: datos,
        success: function(e){
        }  
    });
    location.href ="/Proyecto/Proyecto_cine/registro_horario.php";
}