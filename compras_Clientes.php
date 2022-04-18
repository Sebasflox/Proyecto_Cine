<?php include "shared/header.php" ?>

<?php 

include "Model/conexion.php";
  $con = new clsConexion;
  $db = $con->conexion();
  $compras_Clientes = $db->query($facturas);
  $facturas = 'select * from factura where Nombre = "Juan"';
?>


<main>


    <table id="tdatos" class="lista">
      <br>
        <thead>
          <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Titulo</th>
            <th>Asiento</th>
            <th>Total</th>
          
          </tr>
          <?php 
          include 'compras_Clientes.php';
          $ventas = 0;
          while($row7 = $clientes_factura ->fetchRow()){
            $ventas = $ventas + intval($row7['Total']);
            echo '<tr>';
            echo '<th>'.$row7["IdFactura"].'</th>';
            echo '<th>'.$row7["Nombre"].'</th>';
            echo '<th>'.$row7["Titulo"].'</th>';
            echo '<th>'.$row7["Asiento"].'</th>';
            echo '<th>'.$row7["Total"].'</th>';
            
            echo '</tr>';
          }

    ?>



<?php include "shared/footer.php" ?>