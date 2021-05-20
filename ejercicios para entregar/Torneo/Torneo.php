<?php

class Torneo{

protected $strNombree;
protected $intNuI;
protected $estado;

function __construct(string $nombree, int $NuI, string $estado){
    $this->strNombree        = $nombree;
    $this->intNuI       = $NuI;
    $this->estado          = $estado;
   

}

public function getDatosUsuario(){

    $vrdatos =" 
        <h2> DATOS DE USUARIO </h2>
        Nombres: {$this->strNombree}<br>
        Numero Intregantes:   {$this->intNuI}<br>
        Estado:    {$this->estado}<br>
         
    ";
    return $vrdatos;

}



}

?>