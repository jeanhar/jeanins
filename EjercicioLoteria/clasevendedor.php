<?php
    require_once("clasecliente.php");
    
    class Vendedor extends Cliente{

      public $intBilletes;

      private $ftlSalario;

      public function __construct(String $nombres, int $celular,String $correo,String $direcion,int $cantidad_b, float $salario)
      {
          parent:: __construct($nombres,$celular,$correo,$direcion);

          $this->intBilletes=$cantidad_b;
          $this->ftlSalario=$salario;


      }
      public function getVerDatosUsuario(){
            
        $arrayDatos=Array('Nombres'=>$this->strNombres,
                            'Celular'=>$this->intCelular,
                            'Correo'=>$this->strCorreo,
                            'Direccion'=>$this->strDirecion,
                            'Cantidad de Billetes'=>$this->intBilletes,
                            'Salario'=>$this->ftlSalario
        );


                 return $arrayDatos;

    }



        
    }

    




?>