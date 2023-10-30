<?php

include_once('conexion.php');

class ConexionSingleton {
    private static $instancia = null;
    private $conexion;

    private function __construct()
    {
        $this->conexion = new Conexion();
    }
    
    public static function obtenerInstancia()
    {
        if (self::$instancia === null)
        {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    public function obtenerConexion() 
    {
        return $this->conexion->conectar();
    }
}