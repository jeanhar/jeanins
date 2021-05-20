<?php

require_once("Persona.php");

class Empleado extends Persona{

    protected $intSueldo;
    static $estado="Activo";

    function __construct(string $nombre, string $edad,int $sueldo){
        parent::__construct($nombre, $edad);
        $this->intSueldo= $sueldo;
    }


    public function getDatosUsuario(){

        $vrdatos =" 
            <h2> DATOS DE USUARIO </h2>
            Nombres: {$this->strNombre}<br>
            Edad:   {$this->strEdad}<br>
            Sueldo: {$this->intSueldo}<br>
            
        ";
        return $vrdatos;
    }





}







?>