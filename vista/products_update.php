<?php
include("header.php");


if (isset($_GET['productID'])) {
	$productID = $_GET['productID'];

	include_once("../controlador/ControladorProducts.php");
	$controller = new ControllerProducts();
	$results = $controller->mostrarTablaProductos();

	$product = null;
	foreach ($results as $row) {
		if ($row['ProductID'] == $productID) {
			$product = $row;
			break;
		}
	}

	if ($product) {

		$ProductName = $product['ProductName'];
		$SupplierID = $product['SupplierID'];
		$CategoryID = $product['CategoryID'];
		$QuantityPerUnit = $product['QuantityPerUnit'];
		$UnitPrice = $product['UnitPrice'];
		$UnitsInStock = $product['UnitsInStock'];
		$UnitsOnOrder = $product['UnitsOnOrder'];
		$ReorderLevel = $product['ReorderLevel'];
		$Discontinued = $product['Discontinued'];

	} else {
		echo "No se encontraron datos para el cliente con ID: " . $productID;
	}
} else {
	echo "No se proporcionó un ID de cliente";
}
?>
<div class="all_container">
	<div class="container is-fluid mb-6">
		<h1 class="title">Producto</h1>
		<h2 class="subtitle">Actualizar Producto</h2>
	</div>
	<div class="container pb-6 pt-6">

		<form action="../controlador/ControladorProducts.php?accion=actualizarProducto" method="POST" class="FormularioAjax">
			<div class="columns">
				<div class="column" style="display:none">
					<div class="control">
						<input class="input" type="text" name="ProductID" value="<?php echo $productID ?>">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Nombre del Producto</label>
						<input class="input" type="text" name="ProductName" value="<?php echo $ProductName ?>">
					</div>
				</div>
				<div class="column">
					<div class="control">
                        <label for="proovedor" class="mt-2">Proovedor Producto</label>
                        <select class="input" name="SupplierID" id="SupplierID">
                            <option value="<?php echo $SupplierID ?>">--Selecciona--</option>
                            <option value="1">Exotic Liquids</option>
                            <option value="2">New Orleans Cajun Delights</option>
                            <option value="3">Grandma Kelly's Homestead</option>
                            <option value="4">Tokyo Traders</option>
                            <option value="5">Cooperativa de Quesos 'Las Cabras'</option>
                            <option value="6">Mayumi's</option>
                            <option value="7">Pavlova, Ltd.</option>
                            <option value="8">Specialty Biscuits, Ltd.</option>
                            <option value="9">PB Knóckebród AB</option>
                            <option value="10">Refrescos Americanas LTDA</option>
                            <option value="11">Heli Swaren GmbH & Co. KG</option>
                            <option value="12">Plutzer Lebensmittelgromrkte AG</option>
                            <option value="13">Nord-Ost-Fisch Handelsgesellschaft mbH</option>
                            <option value="14">Formaggi Fortini s.r.l.</option>
                            <option value="15">Norske Meierier</option>
                            <option value="16">Bigfoot Breweries</option>
                        </select><br>
					</div>
				</div>
			</div>
            <div class="columns">
				<div class="column">
					<div class="control">
                        <label for="categoria" class="mt-2">Categoria</label>
                        <select class="input" name="CategoryID" id="CategoryID">
                            <option value="<?php echo $CategoryID ?>">--Selecciona--</option>
                            <option value="1">Beverages</option>
                            <option value="2">Condiments</option>
                            <option value="3">Confections</option>
                            <option value="4">Dairy Products</option>
                            <option value="5">Grains/Cereals</option>
                            <option value="6">Meat/Poultry</option>
                            <option value="7">Produce</option>
                            <option value="8">Seafood</option>
                        </select><br>					
                    </div>
				</div>
				<div class="column">
					<div class="control">
						<label>Cantidad por unidad</label>
						<input class="input" type="text" name="QuantityPerUnit" value="<?php echo $QuantityPerUnit ?>">
					</div>
				</div>
			</div>
            <div class="columns">
				<div class="column">
					<div class="control">
						<label>Precio por unidad</label>
						<input class="input" type="number" name="UnitPrice" value="<?php echo $UnitPrice ?>">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Unidades en Inventario</label>
						<input class="input" type="number" name="UnitsInStock" value="<?php echo $UnitsInStock ?>">
					</div>
				</div>
			</div>

            <div class="columns">
				<div class="column">
					<div class="control">
						<label>Unidades Pedidas</label>
						<input class="input" type="number" name="UnitsOnOrder" value="<?php echo $UnitsOnOrder ?>">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Reorder Level</label>
						<input class="input" type="number" name="ReorderLevel" value="<?php echo $ReorderLevel ?>">
					</div>
				</div>
			</div>
			<div class="columns">
				<div class="column">
					<div class="control">
						<label>¿Descontinuado?</label>
						<input class="input" type="number" name="Discontinued" value="<?php echo $Discontinued ?>">
                    </div>
				</div>
			</div>
            
			<p class="has-text-centered">
				<button type="submit" class="button is-info is-rounded">Actualizar</button>
			</p>
		</form>
	</div>
</div>
<style>
	body{
		background: #222;
		color: #222;
	}
	.all_container {
		background: #222;
		color: #222;
	}

	@import url('https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Oswald&family=Pixelify+Sans&display=swap');

	.is-fluid {
		margin-top: 30px;
		text-align: center;
	}

	.title {
		font-family: 'Oswald';
		color: white;
		font-size: 40px;
	}

	.subtitle {
		font-family: 'Oswald';
		color: #09FFFF;
		font-size: 25px;
	}

	label {
		font-size: 20px;
		color: #fff;
	}

	.input {
		width: 660px;
	}

	.control {
		display: flex;
		flex-direction: column;
	}
</style>