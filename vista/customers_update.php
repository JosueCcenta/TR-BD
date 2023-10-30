<?php
include("header.php");

if (isset($_GET['customersID'])) {
	$customersID = $_GET['customersID'];

	// Obtenemos los resultados
	include_once("../controlador/ControladorCustomers.php");
	$controller = new ControllerCustomers();
	$results = $controller->mostrarCustomers();

	// Buscamos el empleado en la lista de resultados
	$customer = null;
	foreach ($results as $row) {
		if ($row['CustomerID'] == $customersID) {
			$customer = $row;
			break;
		}
	}

	if ($customer) {
		// Asignamos los valores a variables para usarlos en el formulario
		$companyName = $customer['CompanyName'];
		$contactName = $customer['ContactName'];
		$contactTitle = $customer['ContactTitle'];
		$address = $customer['Address'];
		$city = $customer['City'];
		$region = $customer['Region'];
		$postalCode = $customer['PostalCode'];
		$country = $customer['Country'];
		$phone = $customer['Phone'];
		$fax = $customer['Fax'];
	} else {
		echo "No se encontraron datos para el cliente con ID: " . $customersID;
	}
} else {
	echo "No se proporcionó un ID de cliente";
}
?>

<div class="all_container">
	<div class="container is-fluid mb-6">
		<h1 class="title">Clientes</h1>
		<h2 class="subtitle">Actualizar cliente</h2>
	</div>
	<div class="container pb-6 pt-6">

		<form action="../controlador/ControladorCustomers.php?accion=actualizarCustomers" method="POST" class="FormularioAjax">
			<div class="columns">
				<div class="column">
					<div class="control">
						<input class="input" type="hidden" name="CustomerID" value="<?php echo $customersID ?>">
					</div>
				</div>
			</div>
			<div class="columns">
				<div class="column">
					<div class="control">
						<label>Nombre de Compañia</label>
						<input class="input" type="text" name="CompanyName" value="<?php echo $companyName ?>">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Nombre de contacto</label>
						<input class="input" type="text" name="ContactName" value="<?php echo $contactName  ?>">
					</div>
				</div>
			</div>
			<div class="columns">
				<div class="column">
					<div class="control">
						<label>Titulo de Contacto</label>
						<input class="input" type="text" name="ContactTitle" value="<?php echo $contactTitle  ?>">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Direccion</label>
						<input class="input" type="text" name="Address" value="<?php echo $address  ?>">
					</div>
				</div>
			</div>
            <div class="columns">
				<div class="column">
					<div class="control">
						<label>Ciudad</label>
						<input class="input" type="text" name="City" value="<?php echo $city  ?>">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Region</label>
						<input class="input" type="text" name="Region" value="<?php echo $region  ?>">
					</div>
				</div>
			</div>
			<div class="columns">
				<div class="column">
					<div class="control">
						<label>Codigo Postal</label>
						<input class="input" type="text" name="PostalCode" value="<?php echo $postalCode  ?>">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Pais</label>
						<input class="input" type="text" name="Country" value="<?php echo $country  ?>">
					</div>
				</div>
			</div>
            <div class="columns">
				<div class="column">
					<div class="control">
						<label>Telefono</label>
						<input class="input" type="text" name="Phone" value="<?php echo $phone  ?>">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>FAX</label>
						<input class="input" type="text" name="Fax" value="<?php echo $fax  ?>">
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