jQuery(document).on('submit','#formularioL', function(event){
    event.preventDefault();

    jQuery.ajax({
        url: "validar.php",
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforesend: function(){
        }

    })
    .done(function(respuesta) {
        if(respuesta == 1){
            location.href ="/Proyecto/Proyecto_cine/index.php";
        } else if(respuesta == 2){
            alert("Usuario no existe");
        }
    })
    .fail(function (resp) {
        console.log(resp.responseText);
    })
    .always(function() {
        console.log("complete");
    });
});