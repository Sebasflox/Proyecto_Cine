function agregarSala(){
    alert("Registro exitoso");
    window.location.href="admin.php";
    var datos =$('#formularioS').serialize();

    $.ajax({
        
        method:"POST",
        url:"registro_sala.php",
        data: datos,
        success: function(e){
        }  
    });

}
