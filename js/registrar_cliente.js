function agregardatos(){
    console.log("fdasd");
    var datos =$('#formulario').serialize();

    $.ajax({
        
        method:"POST",
        url:"registrarse.php",
        data: datos,
        success: function(e){
        }  
    });

}
