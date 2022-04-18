<?php 

include "Model/conexion.php";
  $con = new clsConexion;
  $db = $con->conexion();
  $facturas = 'select * from factura where Nombre = "Juan"';
  $compras_Clientes = $db->query($facturas);

?>