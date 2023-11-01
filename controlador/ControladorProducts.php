<?php

include_once('../modelo/conexion.php');
include_once('../modelo/ModeloProducts.php');

class ControllerProducts {
    public function mostrarProductos() {
        $modelo = new ModelProducts();
        $results = $modelo->mostrarProductos(); 
        return $results; 
    }
    public function mostrarTablaProductos() {
        $modelo = new ModelProducts();
        $results = $modelo->mostrarTablaProductos(); 
        return $results; 
    }
    public function crearProductos($params) {
        $modelo = new ModelProducts();
        $modelo->crearProductos($params);
        header("Location: ../vista/products_new.php"); 
        exit(); 
    }
    public function actualizarProductos($params) {
        $modelo = new ModelProducts();
        $modelo->actualizarProductos($params);
        header("Location: ../vista/products_list.php");
        exit();
    }
    public function eliminarProducts($productID) {
        $modelo = new ModelProducts();
        $modelo->eliminarProducts($productID);
        header("Location: ../vista/products_update.php");
        exit();
    }

}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['accion'])) {
    $params = $_POST;
    $controlador = new ControllerProducts();
    if ($_GET['accion'] == "crearProducto") {
        $controlador->crearProductos($params);
    } elseif ($_GET['accion'] == "actualizarProducto") {
        $params['ProductID'] = $_POST['ProductID'];
        $controlador->actualizarProductos($params);
    } elseif ($_GET['accion'] == "eliminarProducto") {
        $productID = $_POST['ProductID']; 
        $controlador->eliminarProducts($productID);
    }
}

?>
