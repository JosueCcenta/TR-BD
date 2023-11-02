<?php

include_once('conexion.php');

class ModelOrders {
    
    private $conexion;

    public function __construct()
    {
        $this->conexion=new Conexion();
    }

    public function mostrarOrders() {
        $conn = $this->conexion->conectar();

        $stmt = $conn->prepare("CALL sp_LeerOrder()");
        $stmt->execute();
        $result = $stmt->get_result();

        $data = array(); 

        while ($row = $result->fetch_assoc()) {
            $data[] = $row; 
        }

        $conn->close();

        return $data; 
    }

    public function crearOrder($params) {
        try {

            $conn = $this->conexion->conectar();

            foreach ($params as &$value) {
                if ($value === '') {
                    $value = null;
                }
            }

            $stmt = $conn->prepare("CALL sp_CrearOrder(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->bind_param("sisssiissssss", 
                $params['CustomerID'],
                $params['EmployeeID'], 
                $params['OrderDate'], 
                $params['RequiredDate'], 
                $params['ShippedDate'], 
                $params['ShipVia'], 
                $params['Freight'], 
                $params['ShipName'], 
                $params['ShipAddress'], 
                $params['ShipCity'], 
                $params['ShipRegion'],
                $params['ShipPostalCode'],
                $params['ShipCountry']
            );

            $stmt->execute();
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error al crear la orden: " . $e->getMessage();
        }
    }

    
    public function actualizarOrder($params) {
        try {

            $conn = $this->conexion->conectar();
    
            foreach ($params as &$value) {
                if ($value === '') {
                    $value = null;
                }
            }
    
            $stmt = $conn->prepare("CALL sp_ActualizarCustomer(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
            $stmt->bind_param("isisssiiiiiiii",
                $params['OrderID'],
                $params['CustomerID'],
                $params['EmployeeID'], 
                $params['OrderDate'], 
                $params['RequiredDate'], 
                $params['ShippedDate'], 
                $params['ShipVia'], 
                $params['Freight'], 
                $params['ShipName'], 
                $params['ShipAddress'], 
                $params['ShipCity'], 
                $params['ShipRegion'],
                $params['ShipPostalCode'],
                $params['ShipCountry']
            );
    
            $stmt->execute();
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error al actualizar la orden: " . $e->getMessage();
        }
    }

    public function eliminarOrder($OrderID) {
        try {

            $conn = $this->conexion->conectar();

            $stmt = $conn->prepare("CALL sp_EliminarOrder(?)");
            $stmt->bind_param("i", $OrderID);
            $stmt->execute();
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error al eliminar la orden: " . $e->getMessage();
        }
    }


}
?>