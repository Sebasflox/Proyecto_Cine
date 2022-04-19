<?php include "shared/header.php" ?>

    <main>
      
      <div class="col-6 form__R" style="text-align-center; justify-content: center;">
        <section id="Registro">
          <form action="" id="formularioB" method="POST" enctype="multipart/form-data ">
            <label class="Texto">Administración de banners</label>
            <div class="mb-3">
            <label for="formFile" class="form-label">Imagen de la pelicula</label>
            <input class="form-control" type="file" name="imagen" id="imagen" >
            </div>
            <div class="row">
              <div class="mb-3">
              <label class="Texto">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo">
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
                <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado">
              </div>
            </div>
            <button type="submit" name="crearB" id="crearB" class="btn btn-primary" >Enviar</button>
          </form>
          <a class="btn btn-outline-dark" href="admin.php">Volver a admin</a>
        </section>
       
    </div>
</div>


   
</main>

<?php
include 'Model/registrarBanner.php';

        if ($_POST){

            $c = new clsBanner();

            $c -> titulo = $_POST['titulo'];
            $c -> fecha = $_POST['publicacion'];
            $c -> imagen= $_POST["imagen"];
            $c -> estado = $_POST['estado'];
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