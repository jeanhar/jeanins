<?php

class Usuario{


    //los atributos un protegido unos privados y publicos
    protected $strNombre;
    private $strEmail;
    public $intEdad;
    private $strFechaRegistro;
    private $intClave;
    static $strEstado = "Activo";

    function __construct(string $nombre, string $email, int $edad){

        // contructor con parametros 
        $this->strNombre        = $nombre;
        $this->strEmail         = $email;
        $this->intEdad          = $edad;
        $this->intClave         = rand();
        $this->strFechaRegistro = date('Y-m-d');

    }
    //metodo get para mostrar informacion y encapsular mostra informacion  string
    public function getNombre(): string
    {
        return $this->strNombre;
    }

    //metodo set para modificar los datos del atributo
    public function setCambioNombre(string $nombre){
        $this->strNombre = $nombre;
    }
//mostrar informacion del email
    public function getEmail(): string
        {
            return $this->intClave;
        }

        public function getClave():int
        {
            return $this->strEmail;
        }

        //funcion para mostrar todos los datos de la clase arreglo para mostra todos datos
        public function getDatosUsuario(){

            $vrdatos =" 
                <h2> DATOS DE USUARIO </h2>
                Nombres: {$this->strNombre}<br>
                Email:   {$this->strEmail}<br>
                Edad:    {$this->intEdad}<br>
                Clave:   {$this->intClave}<br>
                Fecha:   {$this->strFechaRegistro}<br>
            ";
            return $vrdatos;
        }

 






}








?>