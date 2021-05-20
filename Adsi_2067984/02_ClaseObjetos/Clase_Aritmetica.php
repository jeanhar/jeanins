<?php

    class Operacion{//las propiedades pueden definirse =0 "" ó Null
        public $numero1     = 0;
        public $numero2     = 0;
        public $resultado   = 0;

    function __construct($intCant1, $intCant2)
    {
        
        $this->numero1 = $intCant1;
        $this->numero2 = $intCant2;
    }

    public function Suma()
    {
        $this->resultado = $this->numero1 + $this->numero2;
        return $this->resultado;
    }

    public function Multiplicar()
    {
        $this->resultado = $this->numero1 * $this->numero2;
        return $this->resultado;
    }

    


    }//End clase

?>