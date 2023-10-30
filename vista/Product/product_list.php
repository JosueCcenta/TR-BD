<?php
    include("../header.php");
    include_once("./controlador/ControladorProduct.php");
    
    $controller = new ControllerProduct($modelo);
    $results = $controller->mostrarProductos();
?>

<div class="table_container">
    <table>
        <thead>
            <tr class="has-text-centered">
                <th>#</th>
                <th>ProductName</th>
                <th>SupplierID</th>
                <th>CategoryID</th>
                <th>QuantityPerUnit</th>
                <th>UnitPrice</th>
                <th>UnitsInStock</th>
                <th>UnitsOnOrder</th>
                <th>ReorderLevel</th>
                <th>Discontinued</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($results as $row) : ?>
                <tr class="has-text-centered">
                    <td><?= $row['ProductID'] ?></td>
                    <td><?= $row['ProductName'] ?></td>
                    <td><?= $row['SupplierID'] ?></td>
                    <td><?= $row['CategoryID'] ?></td>
                    <td><?= $row['QuantityPerUnit'] ?></td>
                    <td><?= $row['UnitPrice'] ?></td>
                    <td><?= $row['UnitsInStock'] ?></td>
                    <td><?= $row['UnitsOnOrder'] ?></td>
                    <td><?= $row['ReorderLevel'] ?></td>
                    <td><?= $row['Discontinued'] ?></td>
                    <td>
                        <a href="product_update.php?ProductID=<?php $row['ProductID']; ?>" class="button is-success is-rounded is-small">Actualizar</a>
                    </td>
                    <td>
                        <form action="/controlador/ControladorProduct.php?accion=eliminarProducto" method="post">
                            <input type="hidden" name="ProductID" value="<?= $row['ProductID']; ?>">
                            <button type="submit" class="button is-danger is-rounded is-small">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>