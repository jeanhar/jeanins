<?php 
    class Conexion{
    //al declarar las propiedades privadas no podremos acceder desde otras clases
    private $host       = "localhost";
    private $user       = "root";
    private $password   = "";
    private $db         = "comoto";
    private $conect;

    public function __construct()
    {
        $conexionbd = "mysql:hos=" . $this->host . ";dbname=" . $this->db . ";charset=utf8";

        try {
            $this->conect = new PDO($conexionbd, $this->user, $this->password);
            //evaluar errores en una conexion con PDO
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "conexion a BDD establecida";
        } catch (Exception $e) {
            $this->conect = 'Error de conexión';
            echo "ERROR: " . $e->getMessage();
        }
    }
    public function getConect(){
        return $this->conect;
    }
}//End clase

  //  $objpasajero = new Conexion();
?>