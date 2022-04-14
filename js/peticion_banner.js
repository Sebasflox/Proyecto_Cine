function agregarBanner(){
    console.log("fdasd");
    var datos =$('#formularioB').serialize();

    $.ajax({
        
        method:"POST",
        url:"/administracion/registro_banner.php",
        data: datos,
        success: function(e){
        }  
    });

}