function agregarHorario(){
    console.log("fdasd");
    var datos =$('#formularioh').serialize();

    $.ajax({
        
        method:"POST",
        url:"rh.php",
        data: datos,
        success: function(e){
        }  
    });

}