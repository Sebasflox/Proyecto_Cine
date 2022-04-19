<?php
    include 'Model/conexion.php';
    $con = new clsConexion();
    $db = $con->conexion();
    $consulta = "select * from pelicula";

    $consulta1 = "select * from sala where Estado = 1";
    $resultado_1 = $db->query($consulta1);

    $resultado_P = $db->query($consulta);
    ?>