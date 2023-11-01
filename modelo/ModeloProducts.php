<?php

include_once('conexion.php');

class ModelProducts {
    

    public function mostrarProductos() {
        $conexion = new Conexion();
        $conn = $conexion->conectar();

        $stmt = $conn->prepare("CALL sp_LeerProduct()");
        $stmt->execute();
        $result = $stmt->get_result();

        $data = array(); 

        while ($row = $result->fetch_assoc()) {
            $data[] = $row; 
        }

        $conn->close();

        return $data; 
    }

    public function mostrarTablaProductos() {
        $conexion = new Conexion();
        $conn = $conexion->conectar();

        $stmt = $conn->prepare("CALL sp_LeerProductosTodos()");
        $stmt->execute();
        $result = $stmt->get_result();

        $data = array(); 

        while ($row = $result->fetch_assoc()) {
            $data[] = $row; 
        }

        $conn->close();

        return $data; 
    }

    public function crearProductos($params) {
        try {
            $conexion = new Conexion();
            $conn = $conexion->conectar();

            foreach ($params as &$value) {
                if ($value === '') {
                    $value = null;
                }
            }

            $stmt = $conn->prepare("CALL sp_CrearProduct(?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->bind_param("siisiiiii", 
                $params['ProductName'],
                $params['SupplierID'], 
                $params['CategoryID'], 
                $params['QuantityPerUnit'], 
                $params['UnitPrice'], 
                $params['UnitsInStock'], 
                $params['UnitsOnOrder'], 
                $params['ReorderLevel'], 
                $params['Discontinued']
            );

            $stmt->execute();
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error al crear el producto: " . $e->getMessage();
        }
    }

    
    public function actualizarProductos($params) {
        try {
            $conexion = new Conexion();
            $conn = $conexion->conectar();
    
            foreach ($params as &$value) {
                if ($value === '') {
                    $value = null;
                }
            }
    
            $stmt = $conn->prepare("CALL sp_ActualizarProduct(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
            $stmt->bind_param("isiisiiiii",
                $params['ProductID'],  
                $params['ProductName'], 
                $params['SupplierID'], 
                $params['CategoryID'], 
                $params['QuantityPerUnit'], 
                $params['UnitPrice'], 
                $params['UnitsInStock'], 
                $params['UnitsOnOrder'], 
                $params['ReorderLevel'], 
                $params['Discontinued'] 
            );
    
            $stmt->execute();
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error al actualizar el producto: " . $e->getMessage();
        }
    }

    public function eliminarProducts($productsID) {
        try {
            $conexion = new Conexion();
            $conn = $conexion->conectar();

            $stmt = $conn->prepare("CALL sp_EliminarProduct(?)");
            $stmt->bind_param("i", $productsID);
            $stmt->execute();
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error al eliminar el producto: " . $e->getMessage();
        }
    }


}
?>