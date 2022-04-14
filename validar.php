
    <?php 
    require 'Model/Conexion.php';

        $con = new clsConexion;
        $db = $con->conexion();
        $usuario = $_POST['usr'];
        $pass1 = md5($_POST['pass']);
        $_SESSION['usuario'] = $usuario;
        $sql = "SELECT COUNT(*) FROM cliente WHERE Cedula = '".$usuario."' 
        AND Clave = '".$pass1."' AND Tipo = '1' ";

        $stmt = $db-> query($sql);
        $count = $stmt->fetchRow();

        $db -> close();

        echo $count[0];

?>