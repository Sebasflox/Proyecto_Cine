<?php 

include 'adodb5/adodb.inc.php';
include 'adodb5/adodb-exceptions.inc.php';

class clsPelicula{

    public $titulo;
    public $actor;
    public $director;
    public $poster;
    public $clasificacion;
    public $duracion;
    public $genero;
    public $idioma;
    public $sinopsis;
    public $trailer;
    public $estado;

    public function conexion(){

        $server = 'localhost';
        $usr='root';
        $pass='';
        $bd='bdproyecto';

        $db = newAdoConnection("mysqli");

        $db -> connect($server, $usr, $pass, $bd);
        return $db;

    }

    public function insertar(){

        $tabla = 'pelicula';

        $registro = array();
        $registro["Titulo"] = $this -> titulo;
        $registro["Actores_principales"] = $this -> actor;
        $registro["Director"] = $this -> director;
        $registro["Poster"] = $this -> poster;
        $registro["Clasificacion"] = $this -> clasificacion;
        $registro["Duracion"] = $this -> duracion;
        $registro["Genero"] = $this -> genero;
        $registro["Idioma"] = $this -> idioma;
        $registro["Sinopsis"] = $this -> sinopsis;
        $registro["Trailer"] = $this -> trailer;
        $registro["Estado"] = $this -> estado;
        try{
            $db = $this -> conexion();
            $db -> autoExecute($tabla, $registro, 'INSERT');
            $respuesta["operacion"] = 1;
        }
        catch(exception $e){
            $respuesta["operacion"] = 0;
        }
        echo json_encode($respuesta);
    }
}
?>