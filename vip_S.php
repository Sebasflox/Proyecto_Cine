<?php include "shared/header.php" ?>

<?php 

  $var = $_GET['variable'];

  include 'Model/conexion.php';

  $conex = new clsConexion();
  $db = $conex->conexion();

  $infoPeli = 'select * from pelicula where Titulo = "'.$var.'"';

  $infoPeliFinal = $db->query($infoPeli);
  $row3 = $infoPeliFinal->fetchRow();
  echo '<div class="col">
  <div class="fixPoster"><img src="img/'.$row3['Poster'].' "class="imagen"></div>
  </div>';
  echo '<p>Sinopsis: '.$row3["Sinopsis"].'</p>';
  echo '<p>'.$row3["Director"].'</p>';
  echo '<p>Genero: '.$row3["Genero"].'</p>';
  echo '<p>Clasificacion: '.$row3["Clasificacion"].'</p>';
  echo '<p>Idiomas: '.$row3["Idioma"].'</p>';
  echo '<p><a href="'.$row3["Trailer"].'">Trailer</a></p>';
  


  $infoHorario = 'select * from horario where Titulo = "'.$var.'"';
  $infoHorarioFinal = $db->query($infoHorario);

  while($row4 = $infoHorarioFinal->fetchRow()){
  echo '<button class="fixHorario"><a href="comprarAsientos.php?variable1='.$row4["Titulo"].'" >'.$row4["Hora"].'</a></button>';
  echo '<p>'.$row4["Sala"].'</p>';
  echo '<p>'.$row4["Fecha"].'</p>';
  }


?>

<?php include "shared/footer.php" ?>