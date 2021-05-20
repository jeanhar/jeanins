<?php 
    require_once("Conexion.php");

    class Rutas extends Conexion{

        private $idrutas;
        private $rnombre;
        private $rcosto;

        public function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->getConect();
        }

        public function insertRuta(string $numRuta, string $nombres, float $costo){
            $this->idrutas = $numRuta;
            $this->rnombre = $nombres;
            $this->rcosto = $costo;

            //desarrollando la sentencia SQL insert
            $sql = "INSERT INTO ruta(idrutas, rnombre, rcosto)VALUES (?,?,?)";
            //Crear un objeto con prepare
            $insert = $this->conexion->prepare($sql);
            $arrayData = array($this->idrutas, $this->rnombre, $this->rcosto);
            $resInsert = $insert->execute($arrayData);
            $idInsert = $this->conexion->lastInsertId();
            return $idInsert;



        }
        public function deleteRutas(string $nombre){
            $sql = "DELETE FROM ruta WHERE rnombre = $nombre";
            $arrayData = array($nombre);
            $delete = $this->conexion->prepare($sql);
            $del = $delete->execute($arrayData);
            return $del;
        }




    }
?>