<?php

require_once("Zapatos.php");

    class Deportivos extends Zapatos{

        protected $strDescri;
    protected $intPrecio;
        public $intCantidad;

        function __construct(string $talla, string $marca, int $stock, string $decri,int $precio, int $cantidad){
            parent::__construct($talla, $marca, $stock);
            $this->strDescri       = $decri;
            $this->intPrecio       = $precio;
            $this->intCantidad= $cantidad;
        }

        public  function imprimirMensaje(){

            if ($this->intCantidad > $this->intStock ) {
                echo "la cantidad es mayor que el Stock". "<br>" ." stok" .$this->intStock."Cantidad".$this->intCantidad;
            } elseif ($this->intSueldo < 1800000) {
                echo "Usted no debe pagar impuesto"."<br>".$this->strNombre;
            } else {


            }


    }

    public function getDatosUsuario(){

        $vrdatos =" 
            <h2> DATOS DE USUARIO </h2>
            La Talla: {$this->strTalla}<br>
            Marca:   {$this->strMarca}<br>
            Stock:    {$this->intStock}<br>
            La Descipcion: {$this->strDescri}<br>
            Precio:   {$this->intPrecio}<br>
            Cantidad:    {$this->intCantidad}<br>
        ";
        return $vrdatos;



}





    }
?>