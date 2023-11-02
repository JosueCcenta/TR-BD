<?php
include("header.php");
?>
<div class="all_container">
	<div class="container is-fluid mb-6">
		<h1 class="title">CATEGORIAS</h1>
		<h2 class="subtitle">Nueva categoría</h2>
	</div>
	<div class="container pb-6 pt-6">

		<form action="../controlador/ControladorCategory.php?accion=crearCategoria" method="POST"
			class="FormularioAjax">
			<div class="columns">
				<div class="column">
					<div class="control">
						<label>Category Name</label>
						<input class="input" type="text" name="CategoryName">
					</div>
				</div>
				<div class="column">
					<div class="control">
						<label>Description</label>
						<input class="input" type="text" name="Description">
					</div>
				</div>
			</div>
			<div class="columns">
				<div class="column">
					<div class="control">
						<label>Picture</label>
						<input class="input" type="text" name="Picture">
					</div>
				</div>
			</div>
			<p class="has-text-centered">
				<button type="submit" class="button is-info is-rounded">Agregar</button>
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