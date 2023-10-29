<?php

class Conexion {

    function conectar() {
        $host = "localhost";
        $dbname = "northwind"; 
        $username = "root"; 
        $password = ""; 
        $puerto = 3306;
        
        $conn = new mysqli($host, $username, $password, $dbname, $puerto);

        if ($conn->connect_error) {
            die("No se conecto con la base de datos: " . $conn->connect_error);
        }

        return $conn;
    }
}
?>