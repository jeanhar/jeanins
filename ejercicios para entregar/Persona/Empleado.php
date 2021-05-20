<?php

require_once("Persona.php");

class Empleado extends Persona{


protected $intSueldo;


public function __construct( String $nombre, String $edad, int $sueldo){

parent::__construct($nombre,$edad);

$this->intSueldo=$sueldo;

}
public function getSueldo():int 
            {
                return $this->intSueldo;
            }
        public function setSueldo(int $sueldo){
            $this->intSueldo = $sueldo;
        }



}












?>