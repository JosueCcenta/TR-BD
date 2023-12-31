<?php 
	include("header.php");
?>

<div class="container is-fluid mb-6">
	<h1 class="title">EMPLEADOS</h1>
	<h2 class="subtitle">Nuevo empleado</h2>
</div>
<div class="container pb-6 pt-6">

	<div class="form-rest mb-6 mt-6"></div>

	<form action="../controlador/ControladorEmployee.php?accion=crearEmpleado" method="POST" class="FormularioAjax">
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Last Name</label>
				  	<input class="input" type="text" name="LastName">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>First Name</label>
				  	<input class="input" type="text" name="FirstName">
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Title</label>
				  	<input class="input" type="text" name="Title">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Title of Courtesy</label>
				  	<input class="input" type="text" name="TitleOfCourtesy">
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Birth Date</label>
				  	<input class="input" type="date" name="BirthDate">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Hire Date</label>
				  	<input class="input" type="date" name="HireDate">
				</div>
		  	</div>
		</div>
        <div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Address</label>
				  	<input class="input" type="text" name="Address">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>City</label>
				  	<input class="input" type="text" name="City">
				</div>
		  	</div>
		</div>
        <div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Region</label>
				  	<input class="input" type="text" name="Region">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Postal Code</label>
				  	<input class="input" type="text" name="PostalCode">
				</div>
		  	</div>
		</div>
        <div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Country</label>
				  	<input class="input" type="text" name="Country">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Home Phone</label>
				  	<input class="input" type="text" name="HomePhone">
				</div>
		  	</div>
		</div>
        <div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Extension</label>
				  	<input class="input" type="text" name="Extension">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Photo</label>
				  	<input class="input" type="text" name="Photo">
				</div>
		  	</div>
		</div>
        <div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Notes</label>
				  	<input class="input" type="text" name="Notes">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Reports To</label>
				  	<input class="input" type="number" name="ReportsTo">
				</div>
		  	</div>
		</div>
        <div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Photo Path</label>
				  	<input class="input" type="text" name="PhotoPath">
				</div>
		  	</div>
		  	<div class="column">
		    	
		  	</div>
		</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-info is-rounded">Agregar</button>
		</p>
	</form>
</div>
