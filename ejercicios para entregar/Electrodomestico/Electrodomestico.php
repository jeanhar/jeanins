<?php

class Electrodomestico{


    protected $strMarca;

    static $intIva =19;
    
    function __construct(string $marca){
        $this->strMarca = $marca;
    
        
        
    
    }

    public function getDatosUsuario(){

        $vrdatos =" 
            <h2> DATOS DEl ELECTRODOMESTICO </h2>
            La marca: {$this->strMarca}<br>
            El Iva:   {$this->intIva}<br>
            
            
        ";
        return $vrdatos;
    }
    


}











?>