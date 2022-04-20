function agregarPelicula(){
    alert("Registro exitoso");
    window.location.href="admin.php";
    var datos =$('#formularioP').serialize();

    $.ajax({
        
        method:"POST",
        url:"registro_pelicula.php",
        data: datos,
        success: function(e){
        }  
    });
}