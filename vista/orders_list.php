<?php
include("header.php");
include_once("../controlador/ControladorOrders.php");

$controller = new ControllerOrders();
$results = $controller->mostrarOrders(); 

?>
<div class="all_container">
    <div class="table-container">
        <h1>Productos</h1>
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr class="has-text-centered">
                    <th>Orden ID</th>
                    <th>Cliente ID</th>
                    <th>Empleado ID</th>
                    <th>Fecha de orden</th>
                    <th>Fecha Requerida</th>
                    <th>Fecha de envio</th>
                    <th>Via de Envio</th>
                    <th>Transporte</th>
                    <th>Nombre del envio</th>
                    <th>Direccion del envio</th>
                    <th>Ciudad del envio</th>
                    <th>Region del envio</th>
                    <th>Codigo Postal del envio</th>
                    <th>Pais del envio</th>
                    <th colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $row): ?>
                    <tr class="has-text-centered">
                        <td>
                            <?php echo $row['OrderID']; ?>
                        </td>
                        <td>
                            <?php echo $row['CustomerID']; ?>
                        </td>
                        <td>
                            <?php echo $row['EmployeeID']; ?>
                        </td>
                        <td>
                            <?php echo $row['OrderDate']; ?>
                        </td>
                        <td>
                            <?php echo $row['RequiredDate']; ?>
                        </td>
                        <td>
                            <?php echo $row['ShippedDate']; ?>
                        </td>
                        <td>
                            <?php echo $row['ShipVia']; ?>
                        </td>
                        <td>
                            <?php echo $row['Freight']; ?>
                        </td>
                        <td>
                            <?php echo $row['ShipName']; ?>
                        </td>
                        <td>
                            <?php echo $row['ShipAddress']; ?>
                        </td>
                        <td>
                            <?php echo $row['ShipCity']; ?>
                        </td>
                        <td>
                            <?php echo $row['ShipRegion']; ?>
                        </td>
                        <td>
                            <?php echo $row['ShipPostalCode']; ?>
                        </td>
                        <td>
                            <?php echo $row['ShipCountry']; ?>
                        </td>

                        <td>
                            <a href="orders_update.php?OrderID=<?php echo $row['OrderID']; ?>"
                                class="button is-success is-rounded is-small">Actualizar</a>
                        </td>
                        <td>
                            <form action="../controlador/ControladorOrders.php?accion=eliminarOrder" method="post">
                                <input type="hidden" name="OrderID" value="<?php echo $row['OrderID']; ?>">
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