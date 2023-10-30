<?php

include_once('conexion_singleton.php');

class ModelProducts {
        private $conexion;
    
    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }
    
    public function mostrarProductos()
    {
        $stmt = $this->conexion->obtenerConexion()->prepare("CALL sp_LeerProduct()");
        $stmt->execute();
        $result = $stmt->get_result();

        $data = array();

        while ($row = $result->fetch_assoc())
        {
            $data[] = $row;
        }
        $stmt->close();

        return $data;
    }

    public function crearProducto($params)
    {
        foreach ($params as $value)
        {
            if ($value === '')
            {
                $value = null;
            }
        }

    $stmt = $this->conexion->obtenerConexion()->prepare("sp_CrearProduct(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssssssis",
        $params['ProductName'],
        $params['SupplierID'],
        $params['CategoryID'],
        $params['QuantityPerUnit'],
        $params['UnitPrice'],
        $params['UnitsInStock'],
        $params['UnitsOnOrder'],
        $params['ReorderLevel'],
        $params['Discontinued'],
    );

    $stmt->execute();
    $stmt->close();

    }

    public function actualizarProducto($params)
    {
        try 
        {
            foreach ($params as $value)
            {
                if ($value === '')
                {
                    $value = null;
                }
            }
            $stmt= $this->conexion->obtenerConexion()->prepare("CALL sp_ActualizarProduct(?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssssssssssis",
                $params['ProductID'],
                $params['ProductName'],
                $params['SupplierID'],
                $params['CategoryID'],
                $params['QuantityPerUnit'],
                $params['UnitPrice'],
                $params['UnitsInStock'],
                $params['UnitsOnOrder'],
                $params['ReorderLevel'],
                $params['Discontinued'],
            );
            $stmt->execute();
            $stmt->close();
        }catch (Exception $e){
            echo "No se pudo actualizar". $e->getLine();
        }
    }

    public function eliminarProducto($ProductID)
    {
        $stmt = $this->conexion->obtenerConexion()->prepare("CALL sp_EliminarProduct(?)");
        $stmt->bind_param("i",$ProductID);
        $stmt->execute();
        $stmt->close();
    }
}