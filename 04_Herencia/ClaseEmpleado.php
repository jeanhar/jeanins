<?php 

    require_once("ClasePersona.php");

    class Empleado extends Persona{

        private $strPuesto;

        function __construct(int $cedula, string $nombres, int $edad){
            parent::__construct($cedula, $nombres, $edad);
        }

        public function getPuesto():string 
            {
                return $this->strPuesto;
            }
        public function setPuesto(string $puesto){
            $this->strPuesto = $puesto;
        }

    }//end clase