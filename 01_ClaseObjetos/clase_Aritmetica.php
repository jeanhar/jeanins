<?php


class Operacion{


    public $numero1=0;
    public $numero2=0;
    public $resultado=0;

    

  function __construct($intcan,$intcan2){


    // se agregan los atributos a a lo que entra por param
$this->numero1= $intcan;
$this->numero2= $intcan2;

}

    public  function suma(){

        $this->resultado=$this->numero1+$this->numero2;
        return $this->resultado;

    }
    public  function resta(){

        $this->resultado=$this->numero1-$this->numero2;
        return $this->resultado;






}
public  function multiplicar(){

    $this->resultado=$this->numero1*$this->numero2;
    return $this->resutado;






}



}


?>