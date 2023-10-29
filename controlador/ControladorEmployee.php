<?php

include_once('../modelo/conexion.php');
include_once('../modelo/ModeloEmployee.php');
var_dump($_POST);
class ControllerEmployee {
    public function mostrarEmpleados() {
        $modelo = new ModelEmployee();
        $results = $modelo->mostrarEmpleado(); // Almacenar los resultados en $results
        return $results; // Retornar los resultados
    }

    public function crearEmpleado($params) {
        $modelo = new ModelEmployee();
        $modelo->crearEmpleado($params);
        header("Location: ../vista/employee_new.php"); // Corregí el nombre del archivo aquí
        exit(); // Importante para evitar que se siga ejecutando código después de la redirección
    }
    public function actualizarEmpleado($params) {
        $modelo = new ModelEmployee();
        $modelo->actualizarEmpleado($params);
        header("Location: ../vista/employee_list.php");
        exit();
    }
    public function eliminarEmpleado($employeeID) {
        $modelo = new ModelEmployee();
        $modelo->eliminarEmpleado($employeeID);
        header("Location: ../vista/employee_list.php");
        exit();
    }

}

// Verificar si se están recibiendo los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['accion'])) {
    $params = $_POST;
    $controlador = new ControllerEmployee();
    if ($_GET['accion'] == "crearEmpleado") {
        $controlador->crearEmpleado($params);
    } elseif ($_GET['accion'] == "actualizarEmpleado") {
        $params['EmployeeID'] = $_POST['EmployeeID'];
        $controlador->actualizarEmpleado($params);
    } elseif ($_GET['accion'] == "eliminarEmpleado") {
        $employeeID = $_POST['EmployeeID']; // Cambiado de $_GET a $_POST
        $controlador->eliminarEmpleado($employeeID);
    }
}

?>
