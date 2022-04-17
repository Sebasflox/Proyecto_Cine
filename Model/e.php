<?php 

include 'adodb5/adodb.inc.php';
include 'adodb5/adodb-exceptions.inc.php';

class clse{

    public $titulo;
    public $actor;
    public $director;
    public $poster;
    public $clasificacion;
    

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

        $tabla = 'asientos_disponibles';
        $shoto = intval($this ->actor); 
        for ($i=0; $i <$shoto; $i++) { 
            $registro = array();
        $registro["Titulo"] = $this -> titulo;
        $registro["Asiento"] = $i;
        $registro["Sala"] = $this -> director;
        $registro["Estado"] = $this -> poster;
        $registro["Horario"] = $this -> clasificacion;
        
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
}
?>