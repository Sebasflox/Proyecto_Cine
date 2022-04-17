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
    location.href ="/Cine_Fernando/registro_horario.php";
}