<?php 
    class Cliente{
        //Defino Atributos
        public $strNombres;
        private $intCelular;
        protected $strCorreo;
        public $strDirección;
        
        //Creo el constructor asigno valores
        public function __construct(string $nombres, int $celular, string $correo, string $direccion){
            $this->strNombres       = $nombres;
            $this->intCelular       = $celular;
            $this->strCorreo        = $correo;
            $this->strDireccion     = $direccion;

        }
        //Encapsular los datos para ser mostrados
        public function getCelular():int
        {
            return $this->intCelular;
        }

        //Asignar los datos de Celular
        public function setCambiarCelular($celular)
        {
            $this->intCelular = $celular;
        }

        //Creo los metodos
        public function getVerDatosUsuario(){
            $arrayDatos = Array('Nombres'=> $this->strNombres,
                                'Celular'=> $this->intCelular,  
                                'Correo'=>  $this->strCorreo,  
                                'Dirección'=>  $this->strDireccion  
        );
        return $arrayDatos;
        }


    }//End clase


?>
