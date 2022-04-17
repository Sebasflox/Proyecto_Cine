function zoro(){
    console.log("fdasd");
    var datos =$('#formularioe').serialize();

    $.ajax({
        
        method:"POST",
        url:"e.php",
        data: datos,
        success: function(e){
        }  
    });
    
}