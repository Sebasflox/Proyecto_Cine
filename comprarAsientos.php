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
      echo '<button class="bluie" data-id="'.$row4["Asiento"].'" Onclick="cambiarEstado(this)">'.$row4["Asiento"].'</button>';
      $Titulo = $row4['Titulo'];
      $Horario = $row4['Horario'];
      $Sala = $row4['Sala'];
    } else{
      echo '<button class="red">'.$row4["Asiento"].'</button>';
    }
  }
?>
<button Onclick="comprarAsientos('<?php echo $Titulo?>','<?php echo $Horario?>', '<?php echo $Sala?>')">Comprar</button>

<?php include "shared/footer.php" ?>


