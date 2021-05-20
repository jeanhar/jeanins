<?php 

require_once("Libro.php");

class Revista extends Libro{

  protected $strEdicion;
protected $intNdpaginas;


    public function __construct( int $codigo,  string $titulo, string $autor,string $edicion,int $paginas){

        parent::__construct($codigo,$titulo,$autor);
        
        $this->strEdicion=$edicion;
        $this->intNdpaginas=$paginas;
        
        }
    
        public function getNdpaginas(): int
        {
            return $this->intNdpaginas;
        }
        //metodo set realiza la misma operacion constructor
        public function setNdpaginas(int $paginas){
            $this->intNdpaginas = $paginas;
        }

        public function getEdicion(): string
        {
            return $this->strEdicion;
        }
        //metodo set realiza la misma operacion constructor
        public function setEdicion(string $edicion){
            $this->strEdicion = $edicion;
        }




         
        public function getDatosUsuario(){

            $vrdatos =" 
                <h2> DATOS DEl LIBRO </h2>
                Codigo: {$this->intCodigo}<br>
                Titulo:   {$this->strTitulo}<br>
                Autor:   {$this->strAutor}<br>
                Edicion:   {$this->strEdicion}<br>
                   Numero de paginas:   {$this->intNdpaginas}<br>
            ";
            return $vrdatos;
        }
        







}


    ?>