<?php
include("header.php");


if (isset($_GET['OrderID'])) {
	$orderID = $_GET['OrderID'];

	include_once("../controlador/ControladorOrders.php");
	$controller = new ControllerOrders();
	$results = $controller->mostrarOrders($orderID);

	$order = null;
	foreach ($results as $row) {
		if ($row['OrderID'] == $orderID) {
			$order = $row;
			break;
		}
	}

	if ($product) {

		$CustomerID = $order['CustomerID'];
		$EmployeeID = $order['EmployeeID'];
		$OrderDate = $order['OrderDate'];
		$RequiredDate = $order['RequiredDate'];
		$ShippedDate = $order['ShippedDate'];
		$ShipVia = $order['ShipVia'];
		$Freight = $order['Freight'];
		$ShipName = $order['ShipName'];
		$ShipAddress = $order['ShipAddress'];
        $ShipCity = $order['ShipCity'];
		$ShipRegion = $order['ShipRegion'];
		$ShipPostalCode = $order['ShipPostalCode'];
		$ShipCountry = $order['ShipCountry'];

	} else {
		echo "No se encontraron datos para el cliente con ID: " . $orderID;
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

    <form action="../controlador/ControladorOrders.php?accion=crearOrder" method="POST" class="FormularioAjax">
			<div class="columns">
                <div class="column" style="display:none">
					<div class="control">
						<input class="input" type="text" name="OrderID" value="<?php echo $orderID ?>">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Cliente ID</label>
						<input class="input" type="text" name="CustomerID" value="<?php echo $CustomerID ?>">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Empleado ID</label>
						<input class="input" type="text" name="EmployeeID" value="<?php echo $EmployeeID  ?>">
					</div>
				</div>
			</div>
			<div class="columns">
				<div class="column">
					<div class="control">
						<label>Fecha de orden</label>
						<input class="input" type="date" name="OrderDate" value="<?php echo $OrderDate  ?>">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Fecha Requerida</label>
						<input class="input" type="date" name="RequiredDate" value="<?php echo $RequiredDate  ?>">
					</div>
				</div>
			</div>
            <div class="columns">
				<div class="column">
					<div class="control">
						<label>Fecha de envio</label>
						<input class="input" type="date" name="ShippedDate" value="<?php echo $ShippedDate  ?>">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Via de Envio</label>
						<input class="input" type="text" name="ShipVia" value="<?php echo $ShipVia  ?>">
					</div>
				</div>
			</div>
			<div class="columns">
				<div class="column">
					<div class="control">
						<label>Transporte</label>
						<input class="input" type="text" name="Freight" value="<?php echo $Freight  ?>">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Nombre del envio</label>
						<input class="input" type="text" name="ShipName" value="<?php echo $ShipName  ?>">
					</div>
				</div>
			</div>
            <div class="columns">
				<div class="column">
					<div class="control">
						<label>Direccion del envio</label>
						<input class="input" type="text" name="ShipAddress" value="<?php echo $ShipAddress  ?>">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Ciudad del envio</label>
						<input class="input" type="text" name="ShipCity" value="<?php echo $ShipCity  ?>">
					</div>
				</div>
			</div>
            <div class="columns">
				<div class="column">
					<div class="control">
						<label>Region del envio</label>
						<input class="input" type="text" name="ShipRegion" value="<?php echo $ShipRegion  ?>">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Codigo Postal del envio</label>
						<input class="input" type="text" name="ShipPostalCode" value="<?php echo $ShipPostalCode  ?>">
					</div>
				</div>
			</div>
            <div class="columns">
				<div class="column">
					<div class="control">
						<label>País del envio</label>
						<input class="input" type="text" name="ShipCountry" value="<?php echo $ShipCountry  ?>">
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
	body {
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
		font-family: 'Consolas';
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