<?php include "shared/header.php" ?>

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
          include 'facturacion.php';
          $ventas = 0;
          while($row6 = $resultado_Factura->fetchRow()){
            $ventas = $ventas + intval($row6['Total']);
            echo '<tr>';
            echo '<th>'.$row6["IdFactura"].'</th>';
            echo '<th>'.$row6["Nombre"].'</th>';
            echo '<th>'.$row6["Titulo"].'</th>';
            echo '<th>'.$row6["Asiento"].'</th>';
            echo '<th>'.$row6["Total"].'</th>';
            
            echo '</tr>';
          }
          echo '<tr>';
            echo '<th></th>';
            echo '<th></th>';
            echo '<th></th>';
            echo '<th>Total</th>';
            echo '<th>'.$ventas.'</th>';
            echo '</tr>';
          ?>
        </thead>
      
       
      </table>

      <a class="btn btn-outline-dark" href="admin.php">Volver a admin</a>
</main>

<?php include "shared/footer.php" ?>