<?php 
    require_once("Conexion.php");

    class Pasajero extends Conexion {
        private $pcedula;
        private $pnombres;
        private $pcorreo;
        private $pcelular;

        public function __construct(){

            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->getConect();
        }

        public function insertPasajero($cedula, $nombres, $correo, $celular){

            $this->pcedula = $cedula;
            $this->pnombres = $nombres;
            $this->pcorreo = $correo;
            $this->pcelular = $celular;

            //utilizar una sentencia SQL para insertar datos
            $sql = "INSERT INTO pasajero(pcedula, pnombres, pcorreo, pcelular) VALUES(?,?,?,?)";
            //utilizar el medo de PDo para preparar la consulta SQL

            $insert = $this->conexion->prepare($sql);
            //paso los datos a través de un arreglo
            $arrData = array($this->pcedula, $this->pnombres, $this->pcorreo, $this->pcelular);
            $resulInsert = $insert->execute($arrData);
            $idInsert = $this->conexion->lastInsertId();
            return $idInsert;
        }

        public function getAllPasajeros(){
            $sql = "SELECT pcedula, pnombres, pcorreo, pcelular FROM pasajero WHERE pcedula > 10";
            $execute = $this->conexion->query($sql);
            $request = $execute->fetchall(PDO::FETCH_ASSOC);
            return $request;
        }

        public function getIdPasajero(string $cedula){
            $sql ="SELECT pcedula, pnombres, pcorreo, pcelular FROM pasajero WHERE pcedula=?";
            $arrayData = array($cedula);
            $query =$this->conexion->prepare($sql);
            $query->execute($arrayData);
            $request = $query->fetch(PDO::FETCH_ASSOC);
            return $request;
        }

        public function updatePasajero($cedula, $nombres, $correo, $celular){

            $this->pcedula = $cedula;
            $this->pnombres = $nombres;
            $this->pcorreo = $correo;
            $this->pcelular = $celular;

            $sql = "UPDATE pasajero SET pnombres=?, pcorreo=?, pcelular=? WHERE pcedula=$cedula";
            $update = $this->conexion->prepare($sql);
            $arrayData = array($this->pnombres, $this->pcorreo, $this->pcelular);
            $execute = $update->execute($arrayData);
            return $execute;
        }

        public function deletePasjero(string $cedula){
            $sql = "DELETE FROM pasajero WHERE pcedula = $cedula";
            $arrayData = array($cedula);
            $delete = $this->conexion->prepare($sql);
            $del = $delete->execute($arrayData);
            return $del;
        }
        

    }



?>