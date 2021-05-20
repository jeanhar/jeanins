<?php 
    class Billete {
    
        //Atributos Yisell y Jurany
        private $intCodigo;
        private $intSerie;
        protected $fecha ;
        protected $fechaSorteo;
        static $fltCosto = 4500;

        //Constructor Jhonathan Jean
        function __construct(int $codigo)
        {
            $this->intCodigo        = $codigo;
            $this->intSerie         = rand();
            $this->fecha          = date('Y-m-d');
            $this->fechaSorteo    = date('Y-m-d');
            //$this->intcosto = $costo;
        }
        // Metodo Ver Billete Juan Jineth
        public function getVerBillete()
        {
            $arrayDatos = array(
                'Codigo' => $this->intCodigo,
                'Serie' => $this->intSerie,
                'Fecha' => $this->fecha,
                'Fecha sorteo' => $this->fechaSorteo,
                'Costo' => self::$fltCosto);
            return $arrayDatos;
        }
    }//end clase

?>