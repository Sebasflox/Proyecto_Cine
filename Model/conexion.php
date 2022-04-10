<?php 

include 'adodb5/adodb.inc.php';
include 'adodb5/adodb-exceptions.inc.php';

class Conexion{

    public $cedula;
    public $nombre;
    public $telefono;
    public $email;
    public $clave;

    public function conexion(){

        $server = 'localhost';
        $usr='user';
        $pass='123';
        $bd='bdproyecto';

        $db = newAdoConnection("mysqli");

        $db -> connect($server, $usr, $pass, $bd);
        return $db;

    }

    public function insertar(){
        
        $tabla = 'registro_cine';

        $registro = array();
        $registro["Cedula"] = $this -> cedula;
        $registro["Nombre"] = $this -> nombre;
        $registro["Telefono"] = $this -> telefono;
        $registro["Email"] = $this -> email;
        $registro["Clave"] = $this -> clave;

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


    public function consultar(){
        
        $sql = "select * from registro_cine";
        $db = $this -> conexion();

        $registros = $db -> execute($sql);
        $contactos = array();

        while ($r = $registros -> fetchRow()){
            $c = new Conexion();
            
            $c -> cedula = $r[0];
            $c -> nombre = $r[1];
            $c -> telefono = $r[2];
            $c -> email = $r[3];
            $c -> clave = $r[4];

            $contactos[] = $c;

        }
        echo json_encode($contactos)
    }
}
?>