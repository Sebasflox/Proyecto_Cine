<?php
    include 'Model/conexion.php';
    $con = new clsConexion();
    $db = $con->conexion();
    $consulta = "select * from pelicula";
    $resultado_P = $db->query($consulta);
    ?>