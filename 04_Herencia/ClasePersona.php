<?php 
    //Super Clase Persona
    Class Persona{

        protected $intCedula;
        public $strNombre;
        private $intEdad;


        function __construct(int $cedula, string $nombre, int $edad){

            $this->intCedula        = $cedula;
            $this->strNombre        = $nombre;
            $this->intEdad          = $edad;
        }

        public function getDatosPersonales(){
            $datos = "
                <H3> DATOS PERSONALES </H3>
                Cedula: {$this->intCedula}<br>
                Nombre: {$this->strNombre}<br>
                Edad: {$this->intEdad}<br>

            ";
            return $datos;
        }

    }//End clase
?>