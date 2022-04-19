<?php include "shared/header.php" ?>

    <main>
      <center>
      <div class="col-6 form__R">
        <section id="1">
          <form action="" id="formulario" method="POST">
            <label class="Texto">Registrarse</label>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" name="cedula" id="cedula" placeholder="cedula">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="telefono">
              </div>
            </div>
            <label class="Texto">Email acceso</label>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" name="email" id="email" placeholder="email">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" name="clave" id="clave" placeholder="clave">
              </div>
            </div>
          </form>
        </section>
        <button type="submit" name="crear" id="crear" class="btn btn-primary" >Enviar</button>
    </div>
</div>
   </center>
   <p style="font-size: x-large">.</p>
<?php 

include 'Model/conexion.php';

        if ($_POST){

            $c = new clsConexion();

            $c -> cedula = $_POST['cedula'];
            $c -> nombre = $_POST['nombre'];
            $c -> telefono = $_POST['telefono'];
            $c -> email = $_POST['email'];
            $c -> clave = md5($_POST['clave']);
            $c -> insertar();
        }


    ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#crear').on('click', function(e){
                e.preventDefault();
                agregardatos();
            });

        });
    </script>
   
</main>

<?php include "shared/footer.php" ?>