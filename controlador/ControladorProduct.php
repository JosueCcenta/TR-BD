<?php
    include('../modelo/conexion_singleton.php');
    include('../modelo/ModeloProduct.php');

var_dump($_POST);

$conexion = ConexionSingleton::obtenerInstancia();
$modelo = new ModelProducts($conexion);

class ControllerProduct {
        
    private $modelo;

    public function __construct($modelo)
    {
        $this->modelo = $modelo;
    }
    public function mostrarProductos()
    {
        $productos = $this->modelo->mostrarProductos();
        return $productos;
    }

    public function crearProducto($params)
    {
        $this->modelo->crearProducto($params);
        header("Location: ../vista/Product/product_new.php");
        exit();
    }

    public function actualizarProducto($params)
    {
        $this->modelo->actualizarProducto($params);
        header("Location: ../vista/Product/product_list.php");
        exit();
    }

    public function eliminarProducto($productID)
    {
        $this->modelo->eliminarProducto($productID);
        header("Location: ../vista/Product/product_list.php");
        exit();
    }
}

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['accion']))
    {
        $params = $_POST;
        if (isset($modelo) && $modelo instanceof ModelProducts) {
            $controlador = new ControllerProduct($modelo);
            if ($_GET['accion'] == "crearProducto"){
                $controlador->crearProducto($params);
            } elseif ($_GET['accion'] == "actualizarProducto"){
                $params['ProductID'] = $_POST['ProductID'];
                $controlador->actualizarProducto($params);
            }elseif ($_GET['accion'] == "eliminarProducto"){
                $productID = $_POST['ProductID'];
                $controlador->eliminarProducto($productID);
            }
        }
    }