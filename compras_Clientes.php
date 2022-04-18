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
          include 'comprasCliente.php';
          while($row8 = $compras_Clientes ->fetchRow()){
            echo '<tr>';
            echo '<th>'.$row8["IdFactura"].'</th>';
            echo '<th>'.$row8["Nombre"].'</th>';
            echo '<th>'.$row8["Titulo"].'</th>';
            echo '<th>'.$row8["Asiento"].'</th>';
            echo '<th>'.$row8["Total"].'</th>';
            
            echo '</tr>';
          }

    ?>



<?php include "shared/footer.php" ?>