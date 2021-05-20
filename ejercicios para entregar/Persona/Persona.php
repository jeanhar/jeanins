<?php

class Persona{

protected $strNombre;

protected $strEdad;

function __construct(string $nombre, string $edad){
    $this->strNombre        = $nombre;
    $this->strEdad         = $edad;
    
    

}
public function getDatosUsuario(){

    $vrdatos =" 
        <h2> DATOS DE LA PERSONA </h2>
        Nombres: {$this->strNombre}<br>
        Edad:   {$this->strEdad}<br>
        
        
    ";
    return $vrdatos;
}






}





?>