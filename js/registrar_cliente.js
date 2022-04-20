function agregardatos(){
    alert("Registro exitoso");
    window.location.href="/admin.php";
    var datos =$('#formulario').serialize();

    $.ajax({
        
        method:"POST",
        url:"registrarse.php",
        data: datos,
        success: function(e){
        }  
    });

}
