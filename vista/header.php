<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="../css/bulma.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <?php 
        include("../modelo/conexion.php");
    ?>
    <nav class="navbar" role="navigation" aria-label="main navigation">

    <div class="navbar-brand">
        <a class="navbar-item" href="index.php?vista=home">
        <span><b>NORTHWIND</b></span>
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">


            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Empleados</a>

                <div class="navbar-dropdown">
                    <a href="employee_new.php" class="navbar-item">Nuevo</a>
                    <a href="employee_list.php" class="navbar-item">Lista</a>
                </div>
            </div>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Clientes</a>

                <div class="navbar-dropdown">
                    <a href="customers_new.php" class="navbar-item">Nuevo</a>
                    <a href="customers_list.php" class="navbar-item">Lista</a>
                </div>
            </div>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Ordenes</a>

                <div class="navbar-dropdown">
                    <a href="orders_new.php" class="navbar-item">Nuevo</a>
                    <a href="orders_list.php" class="navbar-item">Lista</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Categorías</a>

                <div class="navbar-dropdown">
                    <a href="category_new.php" class="navbar-item">Nueva</a>
                    <a href="category_list.php" class="navbar-item">Lista</a>
                </div>
            </div>


            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Productos</a>

                <div class="navbar-dropdown">
                    <a href="products_new.php" class="navbar-item">Nuevo</a>
                    <a href="products_list.php" class="navbar-item">Lista</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="loginVista.php">Cerrar Sesion</a>
            </div>

        </div>
    </div>
    </nav>