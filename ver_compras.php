<?php include "shared/header.php" ?>

<main>

<div id="formulario" class="m-auto">
        <label for="">Cedula</label>
        <input class="form-control" id="Cedula" type="number" placeholder="IdFactura" required> <br><br>
        <label for="">Nombre</label>
        <input class="form-control" id="Nombre" type="text" placeholder="Nombre" required> <br><br>
        <label for="">Titulo</label>
        <input class="form-control" id="Titulo" type="text" placeholder="Titulo" required> <br><br>
        <label for="">Asiento</label>
        <input class="form-control" id="Asiento" type="number" placeholder="Asiento" required> <br><br>
        <label for="">Total</label>
        <input class="form-control" id="Total" type="text" placeholder=" Total" required> <br><br>
        <button id="agregar" class="btn btn-success">Guardar</button> <br><br>
    </div>

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
        </thead>
        <tbody id="datosTabla">
        </tbody>
      </table>


</main>

<?php include "shared/footer.php" ?>