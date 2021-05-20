<?php



function __construct(int $codigo, int $costo){
    $this->intCodigo        = $codigo;
    $this->serie         = rand();
    $this->fecha          = date('Y-m-d');
    $this->fechasorteo        =date('Y-m-d') ;
    $this->intcosto = costo;

}




?>