<?php


class Video{
static $strAlquilada="si";
    protected $strFecha;
        protected $strNombre;
        protected $strAño;

        protected $srtFechaDe;
    
        protected $intdiasAl;


function __construct(string $fecha, string $nombre, String $ano,String $fechade,int $diasAl ){
            $this->strFecha        = $fecha;
            $this->strNombre         = $nombre;
            $this->strAño         = $ano;
            $this->strFechaDe        = $fechade;
            $this->intdiasAl        = $diasAl;

        }

        public  function valordeAlquiler(){
       
       $valorA= $this->intdiasAl*4000;

       echo "Usted  debe pagar de alquiler"."<br>".$valorA."<br>"."por dias de alquiler".$this->intdiasAl."<br>"."De la pelicula"."<br>".$this->strNombre;
       
       
        }


        public function getDatosUsuario(){

            $vrdatos =" 
                <h2> DATOS DE USUARIO </h2>
                Fecha de Alquiler: {$this->strFecha }<br>
                Nombre:   {$this->strNombre}<br>
                Año:    {$this->strAño}<br>
                Fecha de entrega:   { $this->strFechaDe }<br>
                Dias de Alquiler:    {$this->intdiasAl}<br>
            ";
            return $vrdatos;
        }
        








}


        ?>