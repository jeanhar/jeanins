<?php 
    require_once("ClaseCliente.php");

    class Vendedor extends Cliente{

        public $intCantBilletes;
        private $fltSalario;

        public function __construct(string $nombres, int $celular, string $correo, string $direccion, int $cantidad_b, float $salario){
            parent::__construct($nombres, $celular, $correo, $direccion);
            $this->intCantBilletes = $cantidad_b;            
            $this->fltSalario = $salario;            
        }

    //Creo los metodos - polimorfismo
    public function getVerDatosUsuario()
    {
        $arrayDatos = array(
            'Nombres' => $this->strNombres,
            'Celular' => $this->intCelular,
            'Correo' =>  $this->strCorreo,
            'Dirección' =>  $this->strDireccion,
            'Cantidad billetes' =>  $this->intCantBilletes,
            'Salario' =>  $this->fltSalario
        );
        return $arrayDatos;
    }

    }//End clase

?>