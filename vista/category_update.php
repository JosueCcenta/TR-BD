<?php
include("header.php");

if (isset($_GET['categoryID'])) {
    $categoryID = $_GET['categoryID'];

    // Obtenemos los resultados
    include_once("../controlador/ControladorCategory.php");
    $controller = new ControllerCategory();
    $results = $controller->mostrarCategorias();

    // Buscamos la categoria en la lista de resultados
    $categoria = null;
    foreach ($results as $row) {
        if ($row['CategoryID'] == $categoryID) {
            $categoria = $row;
            break;
        }
    }

    if ($categoria) {
        // Asignamos los valores a variables para usarlos en el formulario
        $categoryName = $categoria['CategoryName'];
        $description = $categoria['Description'];
        $picture = $categoria['Picture'];
    } else {
        echo "No se encontraron datos para la categoria con ID: " . $categoryID;
    }
} else {
    echo "No se proporcionó un ID de categoria";
}
?>

<div class="all_container">
    <div class="container is-fluid mb-6">
        <h1 class="title">CATEGORIAS</h1>
        <h2 class="subtitle">Actualizar categoría</h2>
    </div>
    <div class="container pb-6 pt-6">

        <form action="../controlador/ControladorCategory.php?accion=actualizarCategoria" method="POST"
            class="FormularioAjax">
            <div class="columns">
                <div class="column">
                    <div class="control">
                        <input class="input" type="hidden" name="CategoryID" value="<?php echo $categoryID ?>">
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="control">
                        <label>Category Name</label>
                        <input class="input" type="text" name="CategoryName" value="<?php echo $categoryName ?>">
                    </div>
                </div>
                <div class="column">
                    <div class="control">
                        <label>Description</label>
                        <input class="input" type="text" name="Description" value="<?php echo $description ?>">
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="control">
                        <label>Picture</label>
                        <input class="input" type="text" name="Picture" value="<?php echo $picture ?>">
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
		font-family: 'Oswald';
		color: #00f;
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