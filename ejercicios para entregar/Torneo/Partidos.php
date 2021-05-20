<?php
require_once("Torneo.php");


class Partidos extends Torneo{

   protected $nPartidos;
   protected $puntos;
    function __construct(string $nombree, int $NuI, string $estado,int $nPartidos,int $puntos){
        parent::__construct($nombree, $NuI, $estado);

        $this->nPartidos  = $nPartidos;
        $this->puntos  = $puntos;
    }

    public  function imprimirMensaje(){
        if ($this->puntos < 15) {
            $this->estado=" Desendido";
            echo "Uste ha decendido".$this->estado;
        } else {
            echo "usted ha asendido";
        }

    }
    public function getDatosUsuario(){

        $vrdatos =" 
            <h2> DATOS DE USUARIO </h2>
            Nombres: {$this->strNombree}<br>
            Numero partidos:   {$this->nPartidos}<br>
            Puntos:    {$this->puntos}<br>
             
        ";
        return $vrdatos;
    
    }

}










?>