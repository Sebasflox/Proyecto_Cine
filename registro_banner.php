<?php include "shared/header.php" ?>
<?php 
    //error_reporting(0);
    session_start();
    $ini = $_SESSION['usuario'];

    if($ini == null || $ini = ''){
      echo 'Usted no tiene autorizacion';
      die();
    }

?>
    <main>
      
      <div class="col-6 form__R" style="text-align-center; justify-content: center;">
        <section id="Registro">
          <form action="" id="formularioB" method="POST">
            <label class="Texto">Administración de banners</label>
            <div class="mb-3">
            <label for="formFile" class="form-label">Imagen de la pelicula</label>
            <input class="form-control" type="file" name="Imagen" id="Imagen" >
            </div>
            <div class="row">
              <div class="mb-3">
              <label class="Texto">Titulo</label>
                <input type="text" class="form-control" name="Titulo" id="Titulo" placeholder="Titulo">
              </div>
            </div>
            <div class="row">
              <div class="mb-3">
              <label class="Texto">Fecha de publicación</label>
                <input type="text" class="form-control" name="publicacion" id="publicacion" placeholder="Fecha de publicación">
              </div>
            </div>
            <label class="Texto">Estado</label>
            <div class="row">
              <div class="mb-3">
                <input type="text" class="form-control" name="Estado" id="Estado" placeholder="Estado">
              </div>
            </div>
          </form>
        </section>
        <button type="submit" name="crearB" id="crearB" class="btn btn-primary" >Enviar</button>
    </div>
</div>


   
</main>

<?php
include 'Model/registrarBanner.php';

        if ($_POST){

            $c = new clsBanner();

            $c -> titulo = $_POST['Titulo'];
            $c -> fecha = $_POST['publicacion'];
            $c -> imagen = $_POST['Imagen'];
            $c -> estado = $_POST['Estado'];
            $c -> insertar();
        }


    ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#crearB').on('click', function(e){
                e.preventDefault();
                agregarBanner();
            });

        });
    </script>

<?php include "shared/footer.php" ?>