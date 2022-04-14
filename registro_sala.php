<?php include "shared/header.php" ?>

    <main>
      
      <div class="col-6 form__R">
        <section id="Registro">
          <form action="" id="formularioS" method="POST">
            <label class="Texto">Administración de salas</label>
            
            <div class="row">
              <div class="col">
              <label class="Texto">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre">
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label class="Texto">Tipo</label>
                <input type="text" class="form-control" name="tipo" id="tipo" placeholder="tipo">
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
        <button type="submit" name="creara" id="creara" class="btn btn-primary" >Enviar</button>
    </div>
</div>
   
</main>

<?php 

include 'Model/registrarSala.php';

        if ($_POST){

            $c = new clsSala();

            $c -> nombre = $_POST['nombre'];
            $c -> tipo = $_POST['tipo'];
            $c -> estado = $_POST['estado'];
            $c -> insertar();
        }


    ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#creara').on('click', function(e){
                e.preventDefault();
                agregarSala();
            });

        });
    </script>
   


<?php include "shared/footer.php" ?>