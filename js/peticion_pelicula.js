function agregarPelicula(){
    console.log("fdasd");
    var datos =$('#formularioP').serialize();

    $.ajax({
        
        method:"POST",
        url:"/administracion/registro_pelicula.php",
        data: datos,
        success: function(e){
        }  
    });

}