function agregarBanner(){
    console.log("fdasd");
    var datos =$('#formularioB').serialize();

    $.ajax({
        
        method:"POST",
        url:"registro_banner.php",
        data: datos,
        success: function(e){
        }  
    });

}