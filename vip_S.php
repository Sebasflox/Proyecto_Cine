<?php 

  $var = $_GET['variable'];

  include 'Model/conexion.php';

  $conex = new clsConexion();
  $db = $conex->conexion();

  $infoPeli = 'select * from pelicula where Titulo = "'.$var.'"';

  $infoPeliFinal = $db->query($infoPeli);
  $row3 = $infoPeliFinal->fetchRow();
  echo '<p>'.$row3["Director"].'</p>';
  echo '<p>'.$row3["Poster"].'</p>';
  echo '<p>'.$row3["Sinopsis"].'</p>';
  echo '<p>'.$row3["Genero"].'</p>';
  echo '<p>'.$row3["Clasificacion"].'</p>';
  echo '<p>'.$row3["Idioma"].'</p>';
  echo '<p><a href="'.$row3["Trailer"].'">Trailer</a></p>';
  echo '<p>'.$row3["Director"].'</p>';
  echo '<p>'.$row3["Director"].'</p>';
  echo '<p>'.$row3["Director"].'</p>';


  $infoHorario = 'select * from horario where Titulo = "'.$var.'"';
  $infoHorarioFinal = $db->query($infoHorario);
  $row4 = $infoHorarioFinal->fetchRow();
  echo '<p><a href="comprarAsientos.php?variable1='.$row4["Titulo"].'" >'.$row4["Hora"].'</a></p>';
  echo '<p>'.$row4["Sala"].'</p>';
  echo '<p>'.$row4["Fecha"].'</p>'



?>