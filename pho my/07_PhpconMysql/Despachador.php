<?php
require_once("Conexion.php");

class Despachador extends Conexion {
    private $dcedula;
    private $dnombres;
    private $demail;
    private $dcontraseña;
    private $dtelefono;
    private $dhorario;

    public function __construct(){

        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->getConect();
    }


    public function insertDespachador($cedula, $nombres, $email,$contraseña, $telefono,$horario){

        $this->dcedula = $cedula;
        $this->dnombres = $nombres;
        $this->demail = $email;
        $this->dcontraseña = $contraseña;
        $this->dtelefono = $telefono;
        $this->dhorario = $horario;

        //utilizar una sentencia SQL para insertar datos
        $sql = "INSERT INTO despachado(dcedula, dnombres, email, contrasena,dtelefono,dhorario) VALUES(?,?,?,?,?,?)";
        //utilizar el medo de PDo para preparar la consulta SQL

        $insert = $this->conexion->prepare($sql);
        //paso los datos a través de un arreglo
        $arrData = array($this->dcedula, $this->dnombres, $this->demail, $this->dcontraseña , $this->dtelefono, $this->dhorario);
        $resulInsert = $insert->execute($arrData);
        $idInsert = $this->conexion->lastInsertId();
        return $idInsert;
    }

    public function getAllDespachador(){
        $sql = "SELECT dcedula, dnombres, email, contrasena,dtelefono,dhorario FROM despachado";
        $execute = $this->conexion->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }





}

?>