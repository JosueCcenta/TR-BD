<?php
    include("../header.php");

    if (isset($_GET['ProductID'])) {
        $productId = $_GET['ProductID'];

        include_once("./controlador/ControladorProduct.php");
        $controller = new ControllerProduct($conexion);
        $results = $controller->mostrarProductos();

        $producto = null;
        foreach ($results as $row)
        {
            if ($row['ProductID'] == $productId) {
                $producto = $row;
                break;
            }
        }
        if($producto) {
            // Asignamos los valores a variables para usarlos en el formulario
            $productname = $producto['ProductName'];
            $supplierid = $producto['SupplierID'];
            $categoryid = $producto['CategoryID'];
            $quantityperunit = $producto['QuantityPerUnit'];
            $initprice = $producto['UnitPrice'];
            $unitinstock = $producto['UnitsInStock'];
            $unitsonorder = $producto['UnitsOnOrder'];
            $reorderlevel = $producto['ReorderLevel'];
            $discontinued = $producto['Discontinued'];

        } else {
            echo "No se encontraron datos para el empleado con ID: " . $productID;
        }
    } else {
        return "No se proporcionó un ID de empleado";
    }

?>

<div class="container is-fluid mb-6">
    <h1 class="title">Productos</h1>
    <h2 class="subtitle">>Actualizar Producto</h2>
</div>
<div class="container pb-6 pt-6">
    <div class="form-rest mb-6 mt-6"></div>
    <form action="/controlador/ControladorProduct.php?accion=actualizarProducto" method="POST" class="FormularioAjax">
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Product Name</label>
                    <input class="input" type="text" name="Product Name">
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Supplier ID</label>
                    <input class="input" type="text" name="Supplier ID">
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Category ID</label>
                    <input class="input" type="text" name="Category ID">
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Quantity PerUnit</label>
                    <input class="input" type="text" name="Quantity PerUnit">
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Unit Price</label>
                    <input class="input" type="text" name="Unit Price">
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Units In Stock</label>
                    <input class="input" type="text" name="Units In Stock">
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Units On Order</label>
                    <input class="input" type="text" name="Units On Order">
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Reorder Level</label>
                    <input class="input" type="text" name="Reorder Level">
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Discontinued</label>
                    <input class="input" type="text" name="Discontinued">
                </div>
            </div>
        </div>
        <p class="has-text-centered">
            <button type="submit" class="button is-info is-rounded">Agregar</button>
        </p>
    </form>
</div>