<?php 
    require 'Model/Conexion.php';

    $con = new clsConexion;
    $db = $con->conexion();

    $Titulo = $_POST['Titulo'];
    $cantidadAsientos = $_POST['cantidadAsientos'];
    $Sala = $_POST['Sala'];
    $Estado = $_POST['Estado'];
    $Horario = $_POST['Horario'];

    $campo = intval($cantidadAsientos); 
        for ($i=1; $i <$campo; $i++) {
            $sql = "INSERT INTO `asientos_disponibles`(`Titulo`, `Asiento`, `Sala`, `Estado`, `Horario`) 
            VALUES 
            ('".$Titulo."','".$i."','".$Sala."',".$Estado.",'".$Horario."')";
            $stmt = $db-> query($sql);
        } 

        $db -> close();

        echo $Titulo;
?>