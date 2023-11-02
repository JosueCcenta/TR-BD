<?php
include("header.php");
?>
<div class="all_container">
	<div class="container is-fluid mb-6">
		<h1 class="title">Orden</h1>
		<h2 class="subtitle">Nueva Orden</h2>
	</div>
	<div class="container pb-6 pt-6">

		<form action="../controlador/ControladorOrders.php?accion=crearOrder" method="POST" class="FormularioAjax">
			<div class="columns">
				<div class="column">
					<div class="control">
						<label>Cliente ID</label>
						<input class="input" type="text" name="CustomerID">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Empleado ID</label>
						<input class="input" type="text" name="EmployeeID">
					</div>
				</div>
			</div>
			<div class="columns">
				<div class="column">
					<div class="control">
						<label>Fecha de orden</label>
						<input class="input" type="date" name="OrderDate">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Fecha Requerida</label>
						<input class="input" type="date" name="RequiredDate">
					</div>
				</div>
			</div>
            <div class="columns">
				<div class="column">
					<div class="control">
						<label>Fecha de envio</label>
						<input class="input" type="date" name="ShippedDate">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Via de Envio</label>
						<input class="input" type="text" name="ShipVia">
					</div>
				</div>
			</div>
			<div class="columns">
				<div class="column">
					<div class="control">
						<label>Transporte</label>
						<input class="input" type="text" name="Freight">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Nombre del envio</label>
						<input class="input" type="text" name="ShipName">
					</div>
				</div>
			</div>
            <div class="columns">
				<div class="column">
					<div class="control">
						<label>Direccion del envio</label>
						<input class="input" type="text" name="ShipAddress">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Ciudad del envio</label>
						<input class="input" type="text" name="ShipCity">
					</div>
				</div>
			</div>
            <div class="columns">
				<div class="column">
					<div class="control">
						<label>Region del envio</label>
						<input class="input" type="text" name="ShipRegion">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Codigo Postal del envio</label>
						<input class="input" type="text" name="ShipPostalCode">
					</div>
				</div>
			</div>
            <div class="columns">
				<div class="column">
					<div class="control">
						<label>País del envio</label>
						<input class="input" type="text" name="ShipCountry">
					</div>
				</div>
			</div>
			<p class="has-text-centered">
				<button type="submit" class="button is-info is-rounded">Crear</button>
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