<?php include "shared/header.php" ?>

    <main>
      
      <div class="col-6 form__R">
        <section id="Registro">
          <form action="" id="formulario" method="POST">
            <label class="Texto">Administración de salas</label>
            
            <div class="row">
              <div class="col">
              <label class="Texto">Tipo</label>
                <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo">
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
              <label class="Texto">Actores</label>
                <input type="text" class="form-control" name="actores" id="actores" placeholder="Actores">
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
                <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado">
              </div>
            </div>
          </form>
        </section>
        <button type="submit" name="crear" id="crear" class="btn btn-primary" >Enviar</button>
    </div>
</div>
   
</main>

<?php include "shared/footer.php" ?>