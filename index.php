<?php include "shared/header.php" ?>
    <main>


<!--Carusel 1-->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

        <?php 
              include 'slider.php';

              while($row = $resultado_S->fetchRow()){
          echo '<div class="carousel-item '.$row["activo"].'">';
            echo'<img id="imgCarusel" src="img/'.$row["Imagen"].'" class=" '.$row["clase"].' d-block w-100" alt="'.$row["Titulo"].'">';
          echo'</div>';
              }
              ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <h2><p>Cartelera Semanal</p></h2>
      
<!--Carusel pequeÃ±o-->
<div class="container">
	<div class="row">
		<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
                <?php 
                while($row2 = $resultado_C->fetchRow()){
                echo'<div class="item">';
                echo '<div class="pad15">';
                echo '<a href="vip_s.php?variable='.$row2["Titulo"].'" ><img src="img/'.$row2["Poster"].'"  class="img-fluid" alt="'.$row2["Titulo"].'"></a>';
                   echo '<p class="lead">'.$row2["Titulo"].'</p>';
                   echo '<p>Director</p>';
                   echo '<p>'.$row2["Director"].'</p>';
                   echo '<p>Actores principales</p>';
                   echo '<p>'.$row2["Actores_principales"].'</p>';
                echo '</div>';
                echo '</div>';
                }
                ?>
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
	</div>

</div>

      


    </main>

    <section id="promociones">
      <img id="aas" src="img/Uncharted.png" alt="...">
    </section>

<?php include "shared/footer.php" ?>