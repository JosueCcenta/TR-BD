<?php
include("header.php");
include_once("../controlador/ControladorCategory.php");

$controller = new ControllerCategory();
$results = $controller->mostrarCategorias(); // Asignar los resultados a $results

?>
<div class="all_container">
    <div class="table-container">
        <h1>CATEGORÍAS</h1>
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr class="has-text-centered">
                    <th>#</th>
                    <th>CategoryName</th>
                    <th>Description</th>
                    <th>Picture</th>
                    <th colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $row): ?>
                    <tr class="has-text-centered">
                        <td>
                            <?php echo $row['CategoryID']; ?>
                        </td>
                        <td>
                            <?php echo $row['CategoryName']; ?>
                        </td>
                        <td>
                            <?php echo $row['Description']; ?>
                        </td>
                        <td>
                            <?php echo $row['Picture']; ?>
                        </td>
                        <td>
                            <a href="category_update.php?categoryID=<?php echo $row['CategoryID']; ?>"
                                class="button is-success is-rounded is-small">Actualizar</a>
                        </td>
                        <td>
                            <form action="../controlador/ControladorCategory.php?accion=eliminarCategoria" method="post">
                                <input type="hidden" name="CategoryID" value="<?php echo $row['CategoryID']; ?>">
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