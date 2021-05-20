<?php

class Estudiante{
    protected $strNombre;
    protected $strApellido;
        protected $intDocumento;

        protected $strAsignatura;

        protected $floParcial;
        protected $floExamen;

       
        function __construct(string $nombre, string $apellido, int $documento,String $asignatura,float $parcial,float $examen){
            $this->strNombre        = $nombre;
            $this->strApellido         = $apellido;
            $this->intDocumento         = $documento;
            $this->strAsignatura          = $asignatura;
            $this->floParcial          = $parcial;
            $this->floExamen         = $examen;

        }
        
        public  function Definitiva(){

             $aca1=$this->floParcial*0.40;
             $aca2= $this->floExamen *0.60;
             
             $def=$aca1+$aca2;

             echo"Nota final".$def;

            // $this->resultado=$this->numero1+$this->numero2;
            //return $this->resultado;
            echo "<br>";
            if ($def > 4 && $def<5) {
                echo "Exelente"."Aprobo".$def;
            } elseif ($def>=3 && $def<4) {
                echo "su nota es Aceptable"."Aprobo".$def;
            } else if($def<=2) {
                echo "su nota es Mala"." No Aprobo".$def;



        }






}

public function getDatosUsuario(){

    $vrdatos =" 
        <h2> DATOS DE USUARIO </h2>
        Nombres: {$this->strNombre}<br>
        Apellido:   {$this->strApellido}<br>
        Documento:    {$this->intDocumento}<br>
        Asignatura:    {$this->strAsignatura}<br>
        Parcial:    {$this->floParcial}<br>
        examen final:    {$this->floExamen}<br>
    ";
    return $vrdatos;
}



}




?>