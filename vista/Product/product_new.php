<?php
    include("../header.php");
?>

<div class="container is-fluid mb-6">
    <h1 class="title">Productos</h1>
    <h2 class="subtitle">Nuevo Producto</h2>
</div>
<div class="container pb-6 pt-6">

    <div class="form-rest mb-6 mt-6"></div>
    
    <form action="/controlador/ControladorProduct.php?accion=crearProducto" method="POST" class="FormularioAjax">
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Product Name</label>
                    <input class="input" type="text" name="ProductName">
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Supplier ID</label>
                    <input class="input" type="text" name="SupplierID">
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Category ID</label>
                    <input class="input" type="text" name="CategoryID">
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Quantity PerUnit</label>
                    <input class="input" type="text" name="QuantityPerUnit">
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Unit Price</label>
                    <input class="input" type="text" name="UnitPrice">
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Units In Stock</label>
                    <input class="input" type="text" name="UnitsInStock">
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Units On Order</label>
                    <input class="input" type="text" name="UnitsOnOrder">
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Reorder Level</label>
                    <input class="input" type="text" name="ReorderLevel">
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