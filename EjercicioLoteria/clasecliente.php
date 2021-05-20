<?php

class Cliente{


    public $strNombre;
    private $intCelular;
    protected $strCorreo;

    public $strDirecion;


    public  function __construct(String $nombres, int $celular,String $correo,String $direcion)

    {
        $this->strNombres =$nombres;
        $this->intCelular =$celular;
        $this->strCorreo =$correo;
        $this->strDirecion =$direcion;
    }

    public function getVerDatosUsuario(){
            
        $arrayDatos=Array('Nombres'=>$this->strNombres,
                            'Celular'=>$this->intCelular,
                            'Correo'=>$this->strCorreo,
                            'Direcion'=>$this->strDirecion
        );


                 return $arrayDatos;

    }
    




}












?>