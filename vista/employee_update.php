<?php 
    include("header.php");

    if(isset($_GET['employeeID'])) {
        $employeeID = $_GET['employeeID'];
        
        // Obtenemos los resultados
        include_once("../controlador/ControladorEmployee.php");
        $controller = new ControllerEmployee();
        $results = $controller->mostrarEmpleados();

        // Buscamos el empleado en la lista de resultados
        $empleado = null;
        foreach ($results as $row) {
            if ($row['EmployeeID'] == $employeeID) {
                $empleado = $row;
                break;
            }
        }

        if($empleado) {
            // Asignamos los valores a variables para usarlos en el formulario
            $lastName = $empleado['LastName'];
            $firstName = $empleado['FirstName'];
            $title = $empleado['Title'];
            $titleOfCourtesy = $empleado['TitleOfCourtesy'];
            $birthDate = $empleado['BirthDate'];
            $hireDate = $empleado['HireDate'];
            $address = $empleado['Address'];
            $city = $empleado['City'];
            $region = $empleado['Region'];
            $postalCode = $empleado['PostalCode'];
            $country = $empleado['Country'];
            $homePhone = $empleado['HomePhone'];
            $extension = $empleado['Extension'];
            $photo = $empleado['Photo'];
            $notes = $empleado['Notes'];
            $reportsTo = $empleado['ReportsTo'];
            $photoPath = $empleado['PhotoPath'];
        } else {
            echo "No se encontraron datos para el empleado con ID: " . $employeeID;
        }
    } else {
        echo "No se proporcionó un ID de empleado";
    }
?>


<div class="container is-fluid mb-6">
	<h1 class="title">EMPLEADOS</h1>
	<h2 class="subtitle">Actualizar empleado</h2>
</div>
<div class="container pb-6 pt-6">

	<div class="form-rest mb-6 mt-6"></div>

	<form action="../controlador/ControladorEmployee.php?accion=actualizarEmpleado" method="POST" class="FormularioAjax">
        <div class="columns">
            <div class="column">
                <div class="control">
                    <input class="input" type="hidden" name="EmployeeID" value="<?php echo $employeeID?>">
                   </div>
            </div>
        </div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Last Name</label>
				  	<input class="input" type="text" name="LastName" value="<?php echo $lastName?>">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>First Name</label>
				  	<input class="input" type="text" name="FirstName" value="<?php echo $firstName?>">
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Title</label>
				  	<input class="input" type="text" name="Title" value="<?php echo $title?>">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Title of Courtesy</label>
				  	<input class="input" type="text" name="TitleOfCourtesy" value="<?php echo $titleOfCourtesy?>">
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Birth Date</label>
				  	<input class="input" type="date" name="BirthDate" value="<?php echo $birthDate?>">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Hire Date</label>
				  	<input class="input" type="date" name="HireDate" value="<?php echo $hireDate?>">
				</div>
		  	</div>
		</div>
        <div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Address</label>
				  	<input class="input" type="text" name="Address" value="<?php echo $address?>">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>City</label>
				  	<input class="input" type="text" name="City" value="<?php echo $city?>">
				</div>
		  	</div>
		</div>
        <div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Region</label>
				  	<input class="input" type="text" name="Region" value="<?php echo $region?>">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Postal Code</label>
				  	<input class="input" type="text" name="PostalCode" value="<?php echo $postalCode?>">
				</div>
		  	</div>
		</div>
        <div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Country</label>
				  	<input class="input" type="text" name="Country" value="<?php echo $country?>">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Home Phone</label>
				  	<input class="input" type="text" name="HomePhone" value="<?php echo $homePhone?>">
				</div>
		  	</div>
		</div>
        <div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Extension</label>
				  	<input class="input" type="text" name="Extension" value="<?php echo $extension?>">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Photo</label>
				  	<input class="input" type="text" name="Photo" value="<?php echo $photo?>">
				</div>
		  	</div>
		</div>
        <div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Notes</label>
				  	<input class="input" type="text" name="Notes" value="<?php echo $notes?>">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Reports To</label>
				  	<input class="input" type="number" name="ReportsTo" value="<?php echo $reportsTo?>">
				</div>
		  	</div>
		</div>
        <div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Photo Path</label>
				  	<input class="input" type="text" name="PhotoPath" value="<?php echo $photoPath?>">
				</div>
		  	</div>
		  	<div class="column">
		    	
		  	</div>
		</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-info is-rounded">Actualizar</button>
		</p>
	</form>
</div>

