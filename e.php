<?php include "shared/header.php" ?>
    <main>
      
      <div class="col-6 form__R">
        <section id="Registro">
          <form action="" id="formularioe" method="POST">
            <label class="Texto">Administración de películas</label>
            
            <div class="row">
              <div class="col">
              <label class="Texto">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Tipo">
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto">Actores</label>
                <input type="text" class="form-control" name="actores" id="actores" placeholder="Actores">
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto">Director</label>
                <input type="text" class="form-control" name="director" id="director" placeholder="Director">
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto">Poster</label>
                <input type="text" class="form-control" name="poster" id="poster" placeholder="Poster">
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto">Clasificación</label>
                <input type="text" class="form-control" name="clasificacion" id="clasificación" placeholder="Clasificación">
              </div>
            </div>
            
          </form>
        </section>
        <button type="submit" name="prueba" id="prueba" class="btn btn-primary" >Enviar</button>
    </div>
</div>
   
</main>

<?php
include 'Model/e.php';

        if ($_POST){

            $c = new clse();

            $c -> titulo = $_POST['titulo'];
            $c -> actor = $_POST['actores'];
            $c -> director = $_POST['director'];
            $c -> poster = $_POST['poster'];
            $c -> clasificacion = $_POST['clasificacion'];
            
            $c -> insertar();

        }


    ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#prueba').on('click', function(e){
                e.preventDefault();
                zoro();
            });

        });
    </script>

<?php include "shared/footer.php" ?>