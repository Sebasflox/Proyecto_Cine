<?php include "shared/header.php" ?>

<main>
<?php 
    $var = $_GET['variable1'];
    echo "<p id='parrafo_peli'>Asientos para la pelicula: $var </p>";
    include 'Model/conexion.php';

    $conex = new clsConexion();
    $db = $conex->conexion();

  $infoPeli = 'select * from asientos_disponibles where Titulo = "'.$var.'"';
  $infoPeliFinal = $db->query($infoPeli);
  $cont = 1;
  echo '<div class = "acomodo_asientos">';
  echo '<p>Butaca Desocupada: <b class="reds">Azul</b> </p>';
  echo '<p>Butaca Ocupada: Roja </p>';
  echo '<p>Butaca Seleccionada: Amarilla </p>';
  while($row4 = $infoPeliFinal->fetchRow()){
   
    if($row4["Estado"]){
      echo '<button class="bluie" id="forma" data-id="'.$row4["Asiento"].'" Onclick="cambiarEstado(this)" 
      style="  text-decoration: none;
      padding: 10px;
      font-weight: 600;
      font-size: 20px;
      color: #ffffff;
      background-color: #1883ba;
      border-radius: 6px;
      border: 2px solid #0016b0;"
      >'.$row4["Asiento"].'</button>';
      $Titulo = $row4['Titulo'];
      $Horario = $row4['Horario'];
      $Sala = $row4['Sala'];
    } else{
      echo '<button class="red" id="forma"
      style="  text-decoration: none;
      padding: 10px;
      font-weight: 600;
      font-size: 20px;
      color: #ffffff;
      border-radius: 6px;
      border: 2px solid #0016b0;"
      >'.$row4["Asiento"].'</button>';
    }

    if($cont == 5){
      $cont = 0;
      echo '<br>';
    }
    $cont++;
  }

 
?>
<br>
<button class="btn btn-primary me-md-2" Onclick="comprarAsientos('<?php echo $Titulo;?>','<?php echo $Horario;?>', '<?php echo $Sala;?>')">Comprar</button>
</div>
</main>
<?php include "shared/footer.php" ?>


