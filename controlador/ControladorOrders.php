<?php
include_once('../modelo/conexion.php');
include_once('../modelo/ModeloOrders.php');

class ControllerOrders{

    public function mostrarOrders(){
        $modelo = new ModelOrders();
        $results = $modelo->mostrarOrders();
        return $results;
    }
    public function crearOrder($param){
        $modelo = new ModelOrders();
        $modelo -> crearOrder($param);
        header("Location: ../vista/orders_new.php");
        exit();
    }
    public function actualizarOrder($param){
        $modelo = new ModelOrders();
        $modelo -> actualizarOrder($param);
        header("Location: ../vista/orders_list.php");
        exit();
    }
    public function eliminarOrder($OrderId){
        $modelo = new ModelOrders();
        $modelo -> eliminarOrder($OrderId);
        header("Location: ../vista/orders_list.php");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['accion'])) {
    $params = $_POST;
    $controlador = new ControllerOrders();
    if ($_GET['accion'] == "crearOrder") {
        $controlador->crearOrder($params);
    } elseif ($_GET['accion'] == "actualizarOrder") {
        $params['OrderId'] = $_POST['OrderId'];
        $controlador->actualizarOrder($params);
    } elseif ($_GET['accion'] == "eliminarOrder") {
        $OrderId = $_POST['OrderID']; // Cambiado de $_GET a $_POST
        $controlador->eliminarOrder($OrderId);
    }
}

?>