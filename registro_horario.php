<?php include "shared/header.php" ?>

    <main>
      
      <div class="col-6 form__R">
        <section id="Registro">
          <form action="" id="formularioh" method="POST">
            <label class="Texto">Administración de horarios</label>
            
            <div class="row">
              <div class="col">
              <label class="Texto">Fecha</label>
                <input type="text" class="form-control" name="fecha" id="fecha" placeholder="Fecha">
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto">Hora</label>
                <input type="text" class="form-control" name="hora" id="hora" placeholder="Hora">
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto">Sala</label>
                <input type="text" class="form-control" name="sala" id="sala" placeholder="Sala">
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio">
              </div>
            </div>
          </form>
        </section>
        <button type="submit" name="crearH" id="crearH" class="btn btn-primary" >Enviar</button>
    </div>
</div>
   
</main>

<?php
include 'Model/registrarHorario.php';

        if ($_POST){

            $c = new clsHorario();

            $c -> fecha = $_POST['fecha'];
            $c -> hora = $_POST['hora'];
            $c -> sala = $_POST['sala'];
            $c -> precio = $_POST['precio'];
            $c -> insertar();
        }


    ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#crearH').on('click', function(e){
                e.preventDefault();
                agregarHorario();
            });

        });
    </script>

<?php include "shared/footer.php" ?>