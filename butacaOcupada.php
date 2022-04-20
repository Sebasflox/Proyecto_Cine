<?php 

        $Lista = $_POST['Lista'];
        $Titulo = $_POST['Titulo'];
        $Horario = $_POST['Horario'];
        $Sala = $_POST['Sala'];
        $Asiento = 0;
        $Precio = $_POST['Precio'];

        require 'Model/Conexion.php';

        $con = new clsConexion;
        $db = $con->conexion();

        foreach ($Lista as $key => $value) {
            $sql = ("UPDATE asientos_disponibles SET Estado= 0 WHERE 
            Titulo = '".$Titulo."' AND Asiento = '".$value."' AND Sala = '".$Sala."' AND Horario = '".$Horario."' ");
            $Asiento++;
            $stmt = $db-> query($sql);  }

            $Total = $Asiento*$Precio;
            $sql = 'INSERT INTO factura(Nombre, Titulo, Asiento, Total) 
            VALUES
             ("Juan","'.$Titulo.'","'.$Asiento.'","'.$Total.'")';

            $stmt = $db->query($sql);

            
            

      $db -> close();

      $to = "gsalasb7@gmail.com";
      $subject = "Asunto del email";
      $message = "Este es mi primer envío de email con PHP";
      
      mail($to, $subject, $message);
      
?>