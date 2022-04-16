<?php include "shared/header.php" ?>

    <main>
   
      <div class="col-6 form__R">
        <section id="Registro">
          <form action="" id="formularioh" method="POST">
            <label class="Texto">Administración de horarios</label>
            
            <div class="row">
              <div class="col">
              <label class="Texto">
                <select name="titulo" id="titulo">
                  <?php 
                    include 'select.php';
                    foreach ($resultado_P as $opciones):
                    ?>
                     <option value="<?php echo $opciones['Titulo']; ?>" ><?php echo $opciones['Titulo']; ?><option>
                  <?php endforeach 
                  
                  ?>
                </select> 
              </label>
              </div>
            </div>
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
            <button type="submit" name="crearH" id="crearH" class="btn btn-primary" >Enviar</button>
          </form>
        </section>
        
    </div>
</div>
   
</main>

<?php
      
      
        if ($_POST){
            include 'Model/registrarHorario.php';
            $c = new clsHorario();
            $c -> titulo = $_POST['titulo'];
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