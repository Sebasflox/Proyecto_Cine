function agregarSala(){
    console.log("fdasd");
    var datos =$('#formularioS').serialize();

    $.ajax({
        
        method:"POST",
        url:"/administracion/registro_sala.php",
        data: datos,
        success: function(e){
        }  
    });

}
