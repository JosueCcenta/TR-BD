<?php
include("header.php");
?>
<div class="all_container">
	<div class="container is-fluid mb-6">
		<h1 class="title">CLIENTES</h1>
		<h2 class="subtitle">Nuevo Cliente</h2>
	</div>
	<div class="container pb-6 pt-6">

		<form action="../controlador/ControladorCustomers.php?accion=crearCustomers" method="POST" class="FormularioAjax">
        <div class="columns">
				<div class="column">
					<div class="control">
                        <label>Id Cliente</label>
					    <input class="input" type="text" name="CustomerID">
                    </div>
				</div>
			</div>
			<div class="columns">
				<div class="column">
					<div class="control">
						<label>Nombre de Compañia</label>
						<input class="input" type="text" name="CompanyName">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Nombre de contacto</label>
						<input class="input" type="text" name="ContactName">
					</div>
				</div>
			</div>
			<div class="columns">
				<div class="column">
					<div class="control">
						<label>Titulo de Contacto</label>
						<input class="input" type="text" name="ContactTitle">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Direccion</label>
						<input class="input" type="text" name="Address">
					</div>
				</div>
			</div>
            <div class="columns">
				<div class="column">
					<div class="control">
						<label>Ciudad</label>
						<input class="input" type="text" name="City">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Region</label>
						<input class="input" type="text" name="Region">
					</div>
				</div>
			</div>
			<div class="columns">
				<div class="column">
					<div class="control">
						<label>Codigo Postal</label>
						<input class="input" type="text" name="PostalCode">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Pais</label>
						<input class="input" type="text" name="Country">
					</div>
				</div>
			</div>
            <div class="columns">
				<div class="column">
					<div class="control">
						<label>Telefono</label>
						<input class="input" type="text" name="Phone">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>FAX</label>
						<input class="input" type="text" name="Fax">
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