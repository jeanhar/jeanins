<?php

require_once("Electrodomestico.php");


class Lavadora extends Electrodomestico{

  protected $intCantidad;

  protected $intPrecio;

  public function __construct( string $marca,  int $cantidad){

    parent::__construct($marca);
    
    $this->intCantidad=$cantidad;
    
    }

  

        public  function imprimirMensaje(){

            if ($this->intCantidad == 5) {
                $this->intPrecio=1350000;
                echo "Si la cantidad es  5 usted de pagar". "<br>" .$this->intPrecio;
            } elseif ($this->intCantidad == 8) {
                $this->intPrecio=1450000;
                echo "la cantidad es 8 debe pagar"."<br>". $this->intPrecio;
            } else {








}


        }
        public function getDatosUsuario(){

            $vrdatos =" 
                <h2> DATOS DEl ELECTRODOMESTICO </h2>
                La marca: {$this->strMarca}<br>
                La cantidad: {$this->intCantidad}<br>
                El precio:   {$this->intPrecio}<br>
                
            ";
            return $vrdatos;
        }




    }   

?>