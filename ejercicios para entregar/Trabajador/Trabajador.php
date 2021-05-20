<?php


class Trabajador{
protected $strNombre;
    protected $strCargo;
        public $intSueldo;


        function __construct(string $nombre, string $cargo, int $sueldo){
            $this->strNombre        = $nombre;
            $this->strCargo         = $cargo;
            $this->intSueldo          = $sueldo;
            

        }

        public  function imprimirMensaje(){

            if ($this->intSueldo >= 1800000) {
                echo "Usted debe pagar impuesto". "<br>" .$this->strNombre;
            } elseif ($this->intSueldo < 1800000) {
                echo "Usted no debe pagar impuesto"."<br>".$this->strNombre;
            } else {


           // $this->resultado=$this->numero1+$this->numero2;
            //return $this->resultado;
    
        }

        

        




}

    public function getNombre(): string
        {
            return $this->strNombre;
        }

        //metodo set para modificar los datos del atributo
        public function setCambioNombre(string $nombre){
            $this->strNombre = $nombre;
        }





public function getDatosUsuario(){

    $vrdatos =" 
        <h2> DATOS DE USUARIO </h2>
        Nombres: {$this->strNombre}<br>
        Cargo:   {$this->strCargo}<br>
        Sueldo:    {$this->intSueldo}<br>
        
    ";
    return $vrdatos;
}




}

?>