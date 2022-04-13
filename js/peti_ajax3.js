function agregarSala(){
    console.log("fdasd");
    var datos =$('#formularioS').serialize();

    $.ajax({
        
        method:"POST",
        url:"rs.php",
        data: datos,
        success: function(e){
        }  
    });

}
