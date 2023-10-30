<?php

include_once('conexion.php');

class ModelCustomers {
    

    public function mostrarCustomers() {
        $conexion = new Conexion();
        $conn = $conexion->conectar();

        $stmt = $conn->prepare("CALL sp_LeerCustomer()");
        $stmt->execute();
        $result = $stmt->get_result();

        $data = array(); 

        while ($row = $result->fetch_assoc()) {
            $data[] = $row; 
        }

        $conn->close();

        return $data; 
    }

    public function crearCustomers($params) {
        try {
            $conexion = new Conexion();
            $conn = $conexion->conectar();

            foreach ($params as &$value) {
                if ($value === '') {
                    $value = null;
                }
            }

            $stmt = $conn->prepare("CALL sp_CrearCustomer(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->bind_param("sssssssssss", 
                $params['CustomerID'],
                $params['CompanyName'], 
                $params['ContactName'], 
                $params['ContactTitle'], 
                $params['Address'], 
                $params['City'], 
                $params['Region'], 
                $params['PostalCode'], 
                $params['Country'], 
                $params['Phone'], 
                $params['Fax']
            );

            $stmt->execute();
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error al crear el cliente: " . $e->getMessage();
        }
    }

    
    public function actualizarCustomers($params) {
        try {
            $conexion = new Conexion();
            $conn = $conexion->conectar();
    
            foreach ($params as &$value) {
                if ($value === '') {
                    $value = null;
                }
            }
    
            $stmt = $conn->prepare("CALL sp_ActualizarCustomer(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
            $stmt->bind_param("sssssssssss",
                $params['CustomerID'],  
                $params['CompanyName'], 
                $params['ContactName'], 
                $params['ContactTitle'], 
                $params['Address'], 
                $params['City'], 
                $params['Region'], 
                $params['PostalCode'], 
                $params['Country'], 
                $params['Phone'], 
                $params['Fax'], 
            );
    
            $stmt->execute();
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error al actualizar el cliente: " . $e->getMessage();
        }
    }

    public function eliminarCustomers($customersID) {
        try {
            $conexion = new Conexion();
            $conn = $conexion->conectar();

            $stmt = $conn->prepare("CALL sp_EliminarCustomer(?)");
            $stmt->bind_param("s", $customersID);
            $stmt->execute();
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error al eliminar el cliente: " . $e->getMessage();
        }
    }


}
?>