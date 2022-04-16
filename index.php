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


          echo '<div class="carousel-item '.$row["ACTIVO"].'">';
            echo'<img id="imgCarusel" src="img/'.$row["FOTO"].'" class=" '.$row["CLASE"].' d-block w-100" alt="'.$row["TITULO"].'">';
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
               
                <div class="item">
                 <div class="pad15">
                 <img src="img/Uncharted.png" class="img-fluid" alt="...">
                  <p class="lead">Multi Item Carousel</p>
                    <p>₹ 1</p>
                    <p>₹ 6000</p>
                    <p>50% off</p>
                </div>
                </div>
                
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