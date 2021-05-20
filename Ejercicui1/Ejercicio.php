<?php

class Vehiculo{

    public $intplaca;
    public $strmarca;
    public $strmodelo;
    public $scilindraje;


    function __construct(int $placa, string $marca, string $modelo,int $cilindraje ){

        // contructor con parametros 
        $this->intplaca       = $placa;
        $this->strmarca         = $marca;
        $this->strmodelo         = $modelo;
        $this->scilindraje         =$cilindraje;
        

    }

    public  function calcular_soatt(){
       
        if ($this->scilindraje==1500) {
            echo "el cilindraje es de 1500cc ";
               $prima=374500;
               $contribucion=187000;
               echo "<br>";
           $total=($prima+$contribucion)*5; 
           
           echo"prima    ".$prima."contribucion    ". $contribucion."total a pagar 5 años     ". $total;


        } elseif ( $this->scilindraje==2500) {
            echo "el cilindraje es de 2500 c.c  ";
            echo "<br>";
            $prima=447400;
            $contribucion=223000;

        $total=($prima+$contribucion)*5; 
        
        echo"prima    ".$prima."<br>"."contribucion   "."<br>". $contribucion."<br>"."total a pagar 5 años     "."<br>". $total;


        }elseif ($this->scilindraje>2500) {
            echo "el cilindraje mayor 2500";
            $prima=525400;
            $contribucion=262000;
            echo "<br>";
        $total=($prima+$contribucion)*5; 
        
        echo"prima     ".$prima."contribucion     ". $contribucion."total a pagar 5 años   ". $total;

    }
    }







    }















?>