<?php 

        $Lista = $_POST['Lista'];
        $Titulo = $_POST['Titulo'];
        $Horario = $_POST['Horario'];
        $Sala = $_POST['Sala'];

        require 'Model/Conexion.php';

        $con = new clsConexion;
        $db = $con->conexion();

        foreach ($Lista as $key => $value) {
            $sql = ("UPDATE asientos_disponibles SET Estado= 0 WHERE 
            Titulo = '".$Titulo."' AND Asiento = '".$value."' AND Sala = '".$Sala."' AND Horario = '".$Horario."' ");
            $stmt = $db-> query($sql);  }

        
      $db -> close();
?>