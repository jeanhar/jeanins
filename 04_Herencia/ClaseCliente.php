<?php 

    require_once("ClasePersona.php");

    class Cliente extends Persona{

        protected $fltCredito;

        function __construct(int $cedula, string $nombre, int $edad){

            parent::__construct($cedula, $nombre, $edad);
        }
    
    public function getCredito(): int
    {
        return $this->fltCredito;
    }
    //metodo set realiza la misma operacion constructor
    public function setCredito(float $credito){
        $this->fltCredito = $credito;
    }
    
    }//End clase
?>