<?php include "shared/header.php" ?>

    <main>
   
      <div class="col-6 form__R">
        <section id="Registro">
          <form action="" id="formularioh" method="POST">
            <label class="Texto">Administración de horarios</label>
            
            <div class="row">
              <div class="col">
              <label class="Texto">Pelicula
                <select class="form-select" name="titulo" id="titulo">
                  <?php 
                    include 'select.php';
                    foreach ($resultado_P as $key => $value) {
                      echo '<option value="'.$value["Titulo"].'">'.$value["Titulo"].'</option>';
                    }
                    ?>
                </select> 
              </label>
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto">Fecha</label>
                <input type="date" class="form-control" name="fecha" id="fecha" placeholder="Fecha">
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto">Hora</label>
                <input type="time" class="form-control" name="hora" id="hora" placeholder="Hora">
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto"> Sala
                <select class="form-select" name="sala" id="sala">
                  <?php 
                    foreach ($resultado_1 as $key => $value) {
                      echo '<option value="'.$value["Nombre"].'">'.$value["Nombre"].'</option>';
                    }
                    ?>
                </select> 
              </label>
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio">
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto">Asiento</label>
              <select class="form-select" name="asiento" id="asiento">
                    <option value="20">Normal</option>
                    <option value="35">Vip</option>
                  </select>
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
            </div>
            <button type="submit" name="crearH" id="crearH"  class="btn btn-primary" >Enviar</button>
          </form>
          <a class="btn btn-outline-dark" href="admin.php">Volver a admin</a>
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
            $c -> asiento = $_POST['asiento'];
            $c -> estado = $_POST['estado'];
            $c -> insertar();
            
        }


    ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#crearH').on('click', function(e){
              e.preventDefault();
              $.ajax({
                
                method:"POST",
                url:"generador.php",
                data: {Titulo: document.getElementById("titulo").value,
                  cantidadAsientos: document.getElementById("asiento").value,
                  Sala: document.getElementById("sala").value,
                  Estado: document.getElementById("estado").value,
                  Horario: document.getElementById("hora").value},
                success: function(e){
                  console.log(e);
                  agregarHorario();
                }  
            });
            });

        });
    </script>

<?php include "shared/footer.php" ?>