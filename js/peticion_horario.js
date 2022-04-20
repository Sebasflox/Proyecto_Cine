function agregarHorario(){

    var datos =$('#formularioh').serialize();

    $.ajax({
        
        method:"POST",
        url:"registro_horario.php",
        data: datos,
        success: function(e){
        }  
        
    });
    alert("Registro exitossssso");
    window.location.href="admin.php";
}

