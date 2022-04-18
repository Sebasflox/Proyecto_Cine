<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fernando</title>
    <link rel="icon" type="img/jfif" href="img/Moneda.jfif">
    <!-- CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.bundle.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/psa.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<?php 

  $var = $_GET['variable'];

  include 'Model/conexion.php';

  $conex = new clsConexion();
  $db = $conex->conexion();

  $infoPeli = 'select * from pelicula where Titulo = "'.$var.'"';

  $infoPeliFinal = $db->query($infoPeli);
  $row3 = $infoPeliFinal->fetchRow();
  echo '<div class="col">
  <div class="fixPoster"><img src="img/'.$row3['Poster'].' "class="imagen"></div>
  </div>';
  echo '<p>Sinopsis: '.$row3["Sinopsis"].'</p>';
  echo '<p>'.$row3["Director"].'</p>';
  echo '<p>Genero: '.$row3["Genero"].'</p>';
  echo '<p>Clasificacion: '.$row3["Clasificacion"].'</p>';
  echo '<p>Idiomas: '.$row3["Idioma"].'</p>';
  echo '<p><a href="'.$row3["Trailer"].'">Trailer</a></p>';
  


  $infoHorario = 'select * from horario where Titulo = "'.$var.'"';
  $infoHorarioFinal = $db->query($infoHorario);

  while($row4 = $infoHorarioFinal->fetchRow()){
  echo '<button class="fixHorario"><a href="comprarAsientos.php?variable1='.$row4["Titulo"].'" >'.$row4["Hora"].'</a></button>';
  echo '<p>'.$row4["Sala"].'</p>';
  echo '<p>'.$row4["Fecha"].'</p>';
  }


?>