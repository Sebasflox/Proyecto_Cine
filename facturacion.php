<?php 

include "Model/conexion.php";
  $con = new clsConexion;
  $db = $con->conexion();
  $facturas = 'select * from factura';
  $resultado_Factura = $db->query($facturas);
?>