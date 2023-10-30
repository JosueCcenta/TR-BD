<?php

include_once('../modelo/conexion.php');
include_once('../modelo/ModeloCategory.php');
class ControllerCategory {
    public function mostrarCategorias() {
        $modelo = new ModelCategory();
        $results = $modelo->mostrarCategoria(); // Almacenar los resultados en $results
        return $results; // Retornar los resultados
    }

    public function crearCategoria($params) {
        $modelo = new ModelCategory();
        $modelo->crearCategoria($params);
        header("Location: ../vista/category_new.php"); // Corregí el nombre del archivo aquí
        exit(); // Importante para evitar que se siga ejecutando código después de la redirección
    }
    public function actualizarCategoria($params) {
        $modelo = new ModelCategory();
        $modelo->actualizarCategoria($params);
        header("Location: ../vista/category_list.php");
        exit();
    }
    public function eliminarCategoria($categoryID) {
        $modelo = new ModelCategory();
        $modelo->eliminarCategoria($categoryID);
        header("Location: ../vista/category_list.php");
        exit();
    }

}

// Verificar si se están recibiendo los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['accion'])) {
    $params = $_POST;
    $controlador = new ControllerCategory();
    if ($_GET['accion'] == "crearCategoria") {
        $controlador->crearCategoria($params);
    } elseif ($_GET['accion'] == "actualizarCategoria") {
        $params['CategoryID'] = $_POST['CategoryID'];
        $controlador->actualizarCategoria($params);
    } elseif ($_GET['accion'] == "eliminarCategoria") {
        $categoryID = $_POST['CategoryID']; // Cambiado de $_GET a $_POST
        $controlador->eliminarCategoria($categoryID);
    }
}

?>
