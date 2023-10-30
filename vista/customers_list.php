<?php
include("header.php");
include_once("../controlador/ControladorCustomers.php");

$controller = new ControllerCustomers();
$results = $controller->mostrarCustomers(); 

?>
<div class="all_container">
    <div class="table-container">
        <h1>CATEGORÍAS</h1>
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr class="has-text-centered">
                    <th>#</th>
                    <th>CompanyName</th>
                    <th>ContactName</th>
                    <th>ContactTitle</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Region</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                    <th>Phone</th>
                    <th>Fax</th>
                    <th colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $row): ?>
                    <tr class="has-text-centered">
                        <td>
                            <?php echo $row['CustomerID']; ?>
                        </td>
                        <td>
                            <?php echo $row['CompanyName']; ?>
                        </td>
                        <td>
                            <?php echo $row['ContactName']; ?>
                        </td>
                        <td>
                            <?php echo $row['ContactTitle']; ?>
                        </td>
                        <td>
                            <?php echo $row['Address']; ?>
                        </td>
                        <td>
                            <?php echo $row['City']; ?>
                        </td>
                        <td>
                            <?php echo $row['Region']; ?>
                        </td>
                        <td>
                            <?php echo $row['PostalCode']; ?>
                        </td>
                        <td>
                            <?php echo $row['Country']; ?>
                        </td>
                        <td>
                            <?php echo $row['Phone']; ?>
                        </td>
                        <td>
                            <?php echo $row['Fax']; ?>
                        </td>

                        <td>
                            <a href="customers_update.php?customersID=<?php echo $row['CustomerID']; ?>"
                                class="button is-success is-rounded is-small">Actualizar</a>
                        </td>
                        <td>
                            <form action="../controlador/ControladorCustomers.php?accion=eliminarCustomers" method="post">
                                <input type="hidden" name="CustomersID" value="<?php echo $row['CustomerID']; ?>">
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
        /* Evita que el texto se divida en varias líneas */
        overflow-x: auto;
        max-width: 500px;
    }
</style>