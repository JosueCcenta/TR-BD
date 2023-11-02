<?php
include("header.php");
include_once("../controlador/ControladorProducts.php");

$controller = new ControllerProducts();
$results = $controller->mostrarProductos(); 

?>
<div class="all_container">
    <div class="table-container">
        <h1>Productos</h1>
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr class="has-text-centered">
                    <th>ProductoID</th>
                    <th>Nombre del Producto</th>
                    <th>Nombre de la categoria</th>
                    <th>Cantidades por unidades</th>
                    <th>Precio por unidad</th>
                    <th>Unidades en inventario</th>
                    <th>Unidades ordenadas</th>
                    <th>Reorder Level</th>
                    <th>¿Descontinuado?</th>
                    <th colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $row): ?>
                    <tr class="has-text-centered">
                        <td>
                            <?php echo $row['ProductID']; ?>
                        </td>
                        <td>
                            <?php echo $row['ProductName']; ?>
                        </td>
                        <td>
                            <?php echo $row['CategoryName']; ?>
                        </td>
                        <td>
                            <?php echo $row['QuantityPerUnit']; ?>
                        </td>
                        <td>
                            <?php echo $row['UnitPrice']; ?>
                        </td>
                        <td>
                            <?php echo $row['UnitsInStock']; ?>
                        </td>
                        <td>
                            <?php echo $row['UnitsOnOrder']; ?>
                        </td>
                        <td>
                            <?php echo $row['ReorderLevel']; ?>
                        </td>
                        <td>
                            <?php echo $row['Discontinued']; ?>
                        </td>

                        <td>
                            <a href="products_update.php?productID=<?php echo $row['ProductID']; ?>"
                                class="button is-success is-rounded is-small">Actualizar</a>
                        </td>
                        <td>
                            <form action="../controlador/ControladorProducts.php?accion=eliminarProducto" method="post">
                                <input type="hidden" name="ProductID" value="<?php echo $row['ProductID']; ?>">
                                <button type="submit" class="button is-danger is-rounded is-small">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<style>
    body {
        background: #222 !important;
        color: #222;
    }
    .all_container{
        background: #222 !important;
        color: #222;
    }

    .table-container {
        margin-left: 35px;
    }

    table {
        width: 95% !important;
        border-radius: 50px !important;
    }

    table,
    thead,
    tbody,
    th,
    td {
        border: 3px solid #09FFFF !important;
        background: #000 !important;
        color: #fff !important;
    }

    td:hover {
        background: #333 !important;
        transition: 0.4s;
    }

    @import url('https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Oswald&family=Pixelify+Sans&display=swap');

    h1 {
        font-family: 'Consolas';
        color: white;
        font-size: 40px;
    }

    td {
        white-space: nowrap;
        overflow-x: auto;
        max-width: 500px;
    }
</style>