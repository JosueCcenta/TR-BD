<?php

include_once('../modelo/conexion.php');
include_once('../modelo/ModeloCustomers.php');

class ControllerCustomers{
    public function mostrarCustomers() {
        $modelo = new ModelCustomers();
        $results = $modelo->mostrarCustomers(); 
        return $results; 
    }

    public function crearCustomers($params) {
        $modelo = new ModelCustomers();
        $modelo->crearCustomers($params);
        header("Location: ../vista/customers_new.php"); 
        exit(); 
    }
    public function actualizarCustomers($params) {
        $modelo = new ModelCustomers();
        $modelo->actualizarCustomers($params);
        header("Location: ../vista/customers_list.php");
        exit();
    }
    public function eliminarCustomers($customersID) {
        $modelo = new ModelCustomers();
        $modelo->eliminarCustomers($customersID);
        header("Location: ../vista/customers_list.php");
        exit();
    }

}

// Verificar si se están recibiendo los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['accion'])) {
    $params = $_POST;
    $controlador = new ControllerCustomers();
    if ($_GET['accion'] == "crearCustomers") {
        $controlador->crearCustomers($params);
    } elseif ($_GET['accion'] == "actualizarCustomers") {
        $params['CustomersID'] = $_POST['CustomersID'];
        $controlador->actualizarCustomers($params);
    } elseif ($_GET['accion'] == "eliminarCustomers") {
        $customersID = $_POST['CustomersID']; // Cambiado de $_GET a $_POST
        $controlador->eliminarCustomers($customersID);
    }
}

?>