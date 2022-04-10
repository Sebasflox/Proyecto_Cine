jQuery(document).on('submit','#formulario2', function(event){
    event.preventDefault();

    jQuery.ajax({
        url: "validarID.php",
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforesend: function(){
        }

    })
    .done(function(respuesta) {
        if(respuesta){
            location.href ="/RentaApp/resultados.php";
        } else{
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