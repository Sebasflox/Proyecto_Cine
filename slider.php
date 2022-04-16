<?php 

include "Model/conexion.php";
  $con = new clsConexion;
  $db = $con->conexion();
  $sliderS = 'select * from banner LIMIT 3';
  $resultado_S = $db->query($sliderS);
  $cartelera = 'select * from pelicula where estado = true';
  $resultado_C = $db->query($cartelera);
?>