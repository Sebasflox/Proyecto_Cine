<?php include "shared/header.php" ?>

    <main>
      
      <div class="col-6 form__R" style="text-align-center; justify-content: center;">
        <section id="Registro">
          <form action="" id="formularioB" method="POST" enctype="multipart/form-data ">
            <label class="Texto">Administración de banners</label>
            <div class="row">
              <div class="mb-3">
              <label class="Texto">Banner</label>
                <input type="text" class="form-control" name="imagen" id="imagen" placeholder="Banner">
              </div>
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
              <div class="row">
              <div class="mb-3">
              <label class="Texto">Id pelicula</label>
                <input type="text" class="form-control" name="id" id="id" placeholder="id">
              </div>
              <div class="row">
              <div class="mb-3">
              <label class="Texto">Estado</label>
                  <select class="form-select" name="estado" id="estado">
                    <option value="first-slide">first-slide</option>
                    <option value="second-slide">second-slide</option>
                    <option value="third-slide">third-slide</option>
                    
                  </select>
              </div>
              <div class="row">
              <div class="mb-3">
              <label class="Texto">Estado</label>
                  <select class="form-select" name="estado" id="estado">
                    <option value="active">active</option>
                    <option value="">Inactivo</option>
                  </select>
              </div>
            </div>
            <div class="row">
              <div class="mb-3">
              <label class="Texto">Estado</label>
                  <select class="form-select" name="estado" id="estado">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                  </select>
              </div>
              </div>
            <button type="submit" name="crearB" id="crearB" class="btn btn-primary" >Enviar</button>
          </form>
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