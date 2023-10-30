<?php

include_once('conexion.php');

class Usuario {

    public function iniciarSesion($FirstName, $LastName) {

        $conexion = new Conexion();
        $conn = $conexion->conectar();
       
        $stmt = $conn->prepare("CALL sp_LoginEmployee(?,?)");
        

        $stmt->bind_param("ss", 
                        $FirstName, 
                        $LastName);

        $stmt->execute();

            if ($stmt->fetch()) {

                return true;

            } else {

                return false;

            }

        $stmt->close();
        $conn->close();    
    }
}
?>
