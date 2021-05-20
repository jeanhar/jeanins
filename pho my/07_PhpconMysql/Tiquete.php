<?php
require_once("Conexion.php");

class Tiquete extends Conexion {
    private $idtiquete;
    private $tfecha;
    private $idvehiculo1;
    private $idruta1;
    private $dcedula1;
    

    public function __construct(){

        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->getConect();
    }

    public function insertTiquete($tiquete, $fecha, $vehiculo,$ruta1, $cedula1){

        $this->idtiquete = $tiquete;
        $this->tfecha = $fecha;
        $this->idvehiculo1 = $vehiculo;
        $this->idruta1= $ruta1;
        $this->dcedula1= $cedula1;
        

        //utilizar una sentencia SQL para insertar datos
        $sql = "INSERT INTO tiquete (idtiquete, tfecha, idvehiculo1, idruta1,dcedula1) VALUES(?,?,?,?,?)";
        //utilizar el medo de PDo para preparar la consulta SQL

        $insert = $this->conexion->prepare($sql);
        //paso los datos a través de un arreglo
        $arrData = array($this->idtiquete, $this->tfecha, $this->idvehiculo1, $this->idruta1 , $this->dcedula1);
        $resulInsert = $insert->execute($arrData);
        $idInsert = $this->conexion->lastInsertId();
        return $idInsert;
    }



    public function getAllTiquete(){
        $sql = "SELECT idtiquete, tfecha, idvehiculo1, idruta1,dcedula1 FROM tiquete";
        $execute = $this->conexion->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }
}






    ?>