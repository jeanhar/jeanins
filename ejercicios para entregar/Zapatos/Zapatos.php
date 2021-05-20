<?php


class Zapatos{
protected $strTalla;
    protected $strMarca;
        public $intStock;


        function __construct(string $talla, string $marca, int $stock){
            $this->strTalla        = $talla;
            $this->strMarca        = $marca;
            $this->intStock        = $stock;
            

        }


        public function getDatosUsuario(){

            $vrdatos =" 
                <h2> DATOS DE USUARIO </h2>
                La Talla: {$this->strTalla}<br>
                Marca:   {$this->strMarca}<br>
                Stock:    {$this->intStock}<br>
               
            ";
            return $vrdatos;



    }

}
        ?>