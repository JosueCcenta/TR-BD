<?php

include_once('conexion.php');

class ModelCategory {
    

    public function mostrarCategoria() {
        $conexion = new Conexion();
        $conn = $conexion->conectar();

        $stmt = $conn->prepare("CALL sp_LeerCategory()");
        $stmt->execute();
        $result = $stmt->get_result();

        $data = array(); // Inicializamos un array para almacenar los resultados

        while ($row = $result->fetch_assoc()) {
            $data[] = $row; // Agregamos cada fila al array
        }

        $conn->close();

        return $data; // Retornamos el array con todos los resultados
    }

    public function crearCategoria($params) {
        try {
            $conexion = new Conexion();
            $conn = $conexion->conectar();

            // Convertir campos vacíos a NULL
            foreach ($params as &$value) {
                if ($value === '') {
                    $value = null;
                }
            }

            $stmt = $conn->prepare("CALL sp_CrearCategory(?, ?, ?)");

            $stmt->bind_param("sss", 
                $params['CategoryName'], 
                $params['Description'], 
                $params['Picture'], 
            );

            $stmt->execute();
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error al crear la categoría: " . $e->getMessage();
        }
    }

    
    public function actualizarCategoria($params) {
        try {
            $conexion = new Conexion();
            $conn = $conexion->conectar();
    
            // Convertir campos vacíos a NULL
            foreach ($params as &$value) {
                if ($value === '') {
                    $value = null;
                }
            }
    
            $stmt = $conn->prepare("CALL sp_ActualizarCategory(?, ?, ?, ?)");
    
            $stmt->bind_param("isss", 
                $params['CategoryID'],
                $params['CategoryName'], 
                $params['Description'], 
                $params['Picture']
            );
    
            $stmt->execute();
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error al actualizar la categoría: " . $e->getMessage();
        }
    }

    public function eliminarCategoria($categoryID) {
        try {
            $conexion = new Conexion();
            $conn = $conexion->conectar();

            $stmt = $conn->prepare("CALL sp_EliminarCategory(?)");
            $stmt->bind_param("i", $categoryID);
            $stmt->execute();
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error al eliminar la categoría: " . $e->getMessage();
        }
    }


}
?>