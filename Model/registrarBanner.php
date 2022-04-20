<?php 

include 'adodb5/adodb.inc.php';
include 'adodb5/adodb-exceptions.inc.php';

class clsBanner{


    public $titulo;
    public $fecha;
    public $imagen;
    public $estado;
    public $id;
    public $Clase;
    public $activo;

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

        $tabla = 'banner';

        $registro = array();
        $registro["id"] = $this -> id;
        $registro["Titulo"] = $this -> titulo;
        $registro["Imagen"] = $this -> imagen;
        $registro["Fecha_publicacion"] = $this -> fecha;
        $registro["clase"] = $this -> Clase;
        $registro["url"] = "#";
        $registro["activo"] = $this -> estado;
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