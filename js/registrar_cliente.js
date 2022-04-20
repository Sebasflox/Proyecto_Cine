function agregardatos(){

    var datos =$('#formulario').serialize();

    $.ajax({
        
        method:"POST",
        url:"registrarse.php",
        data: datos,
        success: function(e){
        }  
    });

    alert("Registro exitoso");
    window.location.href="IniciarSesion.php";
}
