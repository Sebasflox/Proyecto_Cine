jQuery(document).on('submit','#formularioL', function(event){
    event.preventDefault();

    jQuery.ajax({
        url: "validar.php",
        method: 'POST',
        data: $(this).serialize()
    })
        .done(function(respuesta) {
            respuesta = JSON.parse(respuesta);
            if(respuesta["CEDULA"]!= null){
                if(respuesta["TIPO"]== 1) {
                    location.href ="/CineFernando/index.php";
                } else{
                    location.href ="/CineFernando/registro_pelicula.php";
                }
            } else{
                alert("#s");
            }
            
        })
        .fail(function (resp) {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
    });