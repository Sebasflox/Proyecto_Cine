<?php 


class clsHorario{

    public $titulo;
    public $fecha;
    public $hora;
    public $sala;
    public $precio;

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

        $tabla = 'horario';

        $registro = array();
        $registro["Titulo"] = $this->titulo;
        $registro["Fecha"] = $this -> fecha;
        $registro["Hora"] = $this -> hora;
        $registro["Sala"] = $this -> sala;
        $registro["Precio"] = $this -> precio;
        try{
            $db = $this -> conexion();
            $db -> autoExecute($tabla, $registro, 'INSERT');
            $respuesta["operacion"] = 1;
        }
        catch(exception $e){
            $respuesta["operacion"] = 0;
        }
        echo json_encode($respuesta);
        return json_encode($respuesta);
    }
}
?>