function agregarBanner(){

    var datos =$('#formularioB').serialize();

    $.ajax({
        
        method:"POST",
        url:"registro_banner.php",
        data: datos,
        success: function(e){
        }  
    });
    alert("Registro exitoso");
    window.location.href="admin.php";

}