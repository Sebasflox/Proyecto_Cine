function agregarPelicula(){
    console.log("fdasd");
    var datos =$('#formularioP').serialize();

    $.ajax({
        
        method:"POST",
        url:"rp.php",
        data: datos,
        success: function(e){
        }  
    });

}