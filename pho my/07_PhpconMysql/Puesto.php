<?php 
    require_once("Conexion.php");

    class Puesto extends Conexion {
        private $idpuesto;
        private $pnunpuestos;
        private $pdisponible;
        private $idvehiculos;
        

        public function __construct(){

            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->getConect();
        }


        public function deletePuesto(string $nombre){
            $sql = "DELETE FROM puesto WHERE idpuesto = $nombre";
            $arrayData = array($nombre);
            $delete = $this->conexion->prepare($sql);
            $del = $delete->execute($arrayData);
            return $del;
        }

        public function updatePuesto($ipuesto, $nnmpuestos, $disponibles){

            $this->idpuesto = $ipuesto;
            $this->pnunpuestos = $nnmpuestos;
            $this->pdisponible = $disponibles;
        

            $sql = "UPDATE puesto SET pnumpuestos=?,pdisponible=? WHERE idpuesto=$ipuesto";
            $update = $this->conexion->prepare($sql);
            $arrayData = array($this->pnunpuestos, $this->pdisponible);
            $execute = $update->execute($arrayData);
            return $execute;
        }


       
    }



    

?>