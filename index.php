<?php include "shared/header.php" ?>
    <main>


<!--Carusel 1-->
      <?php 

      include "Model/conexion.php";
        $con = new clsConexion;
        $db = $con->conexion();
        $slider = 'Select * from sliders LIMIT 3';
        $resultado_S = $db-> query($slider);
      ?>
      <div class = 'row'>
        <div class='col-lg-12'>
          <div id='myCarousel' class='carousel slide' data-ride='carousel'>
            <ol class='carousel-indicators'>
              <li></li>
              <li></li>
              <li></li>
            </ol>
          <div class='carousel-inner'>
            <?php 
              while($row = mysqli_fetch_array($resultado_S)){
                echo "<div class='carousel-item ".$row['activo']."  '>";
                echo "<img scr='img/".$row['Imagen']."' class='".$row['clase']."' alt='".$row['Titulo']."'>";

          echo "</div>";

        echo"</div>";
      echo"</div>";
              }
              ?>

      <h2><p>Cartelera Semanal</p></h2>
      
<!--Carusel pequeño-->
      <div>
          <div class="row">
            <div class="col fixx">
              <img id="Mario" src="img/Dr._Muelitas.png" class="img-thumbnail" alt="...">
            </div>
            <div class="col fixx">
              <img id="Mario" src="img/Dr._Muelitas.png" class="img-thumbnail" alt="...">
            </div>
            <div class="col fixx">
              <img id="Mario" src="img/Dr._Muelitas.png" class="img-thumbnail" alt="...">
            </div>
          </div>
      </div>
      <div>
        <div class="row">
          <div class="col fixx">
            <img id="Mario" src="img/Dr._Muelitas.png" class="img-thumbnail" alt="...">
          </div>
          <div class="col fixx">
            <img id="Mario" src="img/Dr._Muelitas.png" class="img-thumbnail" alt="...">
          </div>
          <div class="col fixx">
            <img id="Mario" src="img/Dr._Muelitas.png" class="img-thumbnail" alt="...">
          </div>
        </div>
      </div>

      


    </main>

    <section id="promociones">
      <img id="aas" src="img/Uncharted.png" alt="...">
    </section>

<?php include "shared/footer.php" ?>
