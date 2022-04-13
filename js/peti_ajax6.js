function agregarBanner(){
    console.log("fdasd");
    var datos =$('#formularioB').serialize();

    $.ajax({
        
        method:"POST",
        url:"rb.php",
        data: datos,
        success: function(e){
        }  
    });

}