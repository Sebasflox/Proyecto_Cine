<?php 
    require 'Model/Conexion.php';

        $con = new clsConexion;
        $db = $con->conexion();
        $usuario = $_POST['usr'];
        $pass1 = md5($_POST['pass']);

        $sql = "SELECT Cedula, Nombre, Telefono, Email, Tipo FROM cliente WHERE Cedula = '".$usuario."' 
        AND Clave = '".$pass1."' ";

        $stmt = $db-> query($sql);

        $count = $stmt->fetchObject();

        $db -> close();

        echo json_encode($count);

?>