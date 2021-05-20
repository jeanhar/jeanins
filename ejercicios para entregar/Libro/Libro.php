<?php 


class Libro{


    protected $intCodigo;

    protected $strTitulo;

    protected $strAutor;
    
    function __construct(int $codigo,string $titulo, string $autor){
        $this->intCodigo = $codigo;
        $this->strTitulo = $titulo;
        $this->strAutor = $autor;
        
    
    }
    public function getDatosUsuario(){

        $vrdatos =" 
            <h2> DATOS DEl LIBRO </h2>
            Codigo: {$this->intCodigo}<br>
            Titulo:   {$this->strTitulo}<br>
            Autor:   {$this->strAutor}<br>
            
        ";
        return $vrdatos;
    }
    





}








?>