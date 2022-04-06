<?php include "shared/header.php" ?>

    <main>
      
      <div class="col-6 form__R">
        <section id="Registro">
          <form>
            <label class="Texto">Registrarse</label>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Nombre">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Apellido1">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Apellido2">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Cedula">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Fecha">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Telefono">
              </div>
            </div>
            <label class="Texto">Email de acceso</label>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Correo Electronico">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Confirmar correo">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="contraseña">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="confirmar contraseña">
              </div>
            </div>
          </form>
        </section>
        <button type="submit" class="btn btn-primary" >Enviar</button>
    </div>
</div>

   
    </main>

<?php include "shared/footer.php" ?>