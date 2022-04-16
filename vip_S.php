<?php 
  include 'Model/conexion.php'
  $pelicula = $_GET['variable'] 

  $infoPeli = 'select * from pelicula where Titulo = "'.$pelicula.'"';
  $infoPeliFinal = $db->query($cartelera);
  echo $infoPeliFinal['Titulo'];
  echo $infoPeliFinal['Actores_Principales'];
  echo $infoPeliFinal['Directar'];
  echo $infoPeliFinal['Duracion'];
  echo $infoPeliFinal['Sinopsis'];
  echo $infoPeliFinal['Trailer'];

?>