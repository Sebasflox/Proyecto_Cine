<?php 

include "Model/conexion.php";
  $con = new clsConexion;
  $db = $con->conexion();
  $sliderS = 'select * from sliders LIMIT 3';
  $resultado_S = $db->query($sliderS);
  $cartelera = 'select * from pelicula';
  $resultado_C = $db->query($cartelera);
?>