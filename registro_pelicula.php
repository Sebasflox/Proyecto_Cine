<?php include "shared/header.php" ?>
    <main>
      
      <div class="col-6 form__R">
        <section id="Registro">
          <form action="" id="formularioP" method="POST">
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
            <div class="row">
              <div class="col">
              <label class="Texto">Duración</label>
                <input type="text" class="form-control" name="duracion" id="duracion" placeholder="Duración">
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto">Genero</label>
                <input type="text" class="form-control" name="genero" id="genero" placeholder="Genero">
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto">Idioma</label>
                <input type="text" class="form-control" name="idioma" id="idioma" placeholder="Idioma">
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto">Sinopsis</label>
                <input type="text" class="form-control" name="sinopsis" id="sinopsis" placeholder="Sinopsis">
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto">Trailer</label>
                <input type="text" class="form-control" name="trailer" id="trailer" placeholder="Trailer">
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto">Estado</label>
                  <select class="form-select" name="estado" id="estado">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                  </select>
              </div>
          </form>
        </section>
        <button type="submit" name="crearar" id="crearar" class="btn btn-primary" >Enviar</button>
    </div>
    <a class="btn btn-outline-dark" href="admin.php">Volver a admin</a>
</div>
   
</main>

<?php
include 'Model/registrarPelicula.php';

        if ($_POST){

            $c = new clsPelicula();

            $c -> titulo = $_POST['titulo'];
            $c -> actor = $_POST['actores'];
            $c -> director = $_POST['director'];
            $c -> poster = $_POST['poster'];
            $c -> clasificacion = $_POST['clasificacion'];
            $c -> duracion = $_POST['duracion'];
            $c -> genero = $_POST['genero'];
            $c -> idioma = $_POST['idioma'];
            $c -> sinopsis = $_POST['sinopsis'];
            $c -> trailer = $_POST['trailer'];
            $c -> estado = $_POST['estado'];
            $c -> insertar();

        }


    ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#crearar').on('click', function(e){
                e.preventDefault();
                agregarPelicula();
            });

        });
    </script>

<?php include "shared/footer.php" ?>