<?php

include_once('conexion.php');

class ModelEmployee {
    

    public function mostrarEmpleado() {
        $conexion = new Conexion();
        $conn = $conexion->conectar();

        $stmt = $conn->prepare("CALL sp_LeerEmployee()");
        $stmt->execute();
        $result = $stmt->get_result();

        $data = array(); // Inicializamos un array para almacenar los resultados

        while ($row = $result->fetch_assoc()) {
            $data[] = $row; // Agregamos cada fila al array
        }

        $conn->close();

        return $data; // Retornamos el array con todos los resultados
    }

    public function crearEmpleado($params) {
        try {
            $conexion = new Conexion();
            $conn = $conexion->conectar();

            // Convertir campos vacíos a NULL
            foreach ($params as &$value) {
                if ($value === '') {
                    $value = null;
                }
            }

            $stmt = $conn->prepare("CALL sp_CrearEmployee(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->bind_param("sssssssssssssssis", 
                $params['LastName'], 
                $params['FirstName'], 
                $params['Title'], 
                $params['TitleOfCourtesy'], 
                $params['BirthDate'], 
                $params['HireDate'], 
                $params['Address'], 
                $params['City'], 
                $params['Region'], 
                $params['PostalCode'], 
                $params['Country'], 
                $params['HomePhone'], 
                $params['Extension'], 
                $params['Photo'], 
                $params['Notes'], 
                $params['ReportsTo'], 
                $params['PhotoPath']
            );

            $stmt->execute();
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error al crear el empleado: " . $e->getMessage();
        }
    }

    
    public function actualizarEmpleado($params) {
        try {
            $conexion = new Conexion();
            $conn = $conexion->conectar();
    
            // Convertir campos vacíos a NULL
            foreach ($params as &$value) {
                if ($value === '') {
                    $value = null;
                }
            }
    
            $stmt = $conn->prepare("CALL sp_ActualizarEmployee(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
            $stmt->bind_param("isssssssssssssssis", 
                $params['EmployeeID'],
                $params['LastName'], 
                $params['FirstName'], 
                $params['Title'], 
                $params['TitleOfCourtesy'], 
                $params['BirthDate'], 
                $params['HireDate'], 
                $params['Address'], 
                $params['City'], 
                $params['Region'], 
                $params['PostalCode'], 
                $params['Country'], 
                $params['HomePhone'], 
                $params['Extension'], 
                $params['Photo'], 
                $params['Notes'], 
                $params['ReportsTo'], 
                $params['PhotoPath']
            );
    
            $stmt->execute();
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error al actualizar el empleado: " . $e->getMessage();
        }
    }

    public function eliminarEmpleado($employeeID) {
        try {
            $conexion = new Conexion();
            $conn = $conexion->conectar();

            $stmt = $conn->prepare("CALL sp_EliminarEmployee(?)");
            $stmt->bind_param("i", $employeeID);
            $stmt->execute();
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error al eliminar el empleado: " . $e->getMessage();
        }
    }


}
?>