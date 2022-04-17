<?php include "shared/header.php" ?>

<?php 
    $var = $_GET['variable1'];
    echo $var;
    include 'Model/conexion.php';

    $conex = new clsConexion();
    $db = $conex->conexion();

  $infoPeli = 'select * from asientos_disponibles where Titulo = "'.$var.'"';
  $infoPeliFinal = $db->query($infoPeli);
while($row4 = $infoPeliFinal->fetchRow()){
    if($row4["Estado"]){
      echo '<button class="bluie">'.$row4["Asiento"].'</button>';
    } else{
      echo '<button class="red">'.$row4["Asiento"].'</button>';
    }
  }
?>

<?php include "shared/footer.php" ?>