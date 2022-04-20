function agregarBanner(){
    alert("Registro exitoso");
    window.location.href="/admin.php";
    var datos =$('#formularioB').serialize();

    $.ajax({
        
        method:"POST",
        url:"registro_banner.php",
        data: datos,
        success: function(e){
        }  
    });

}