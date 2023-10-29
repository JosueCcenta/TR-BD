<?php
    include("header.php");
    include_once("../controlador/ControladorEmployee.php");
    
    $controller = new ControllerEmployee();
    $results = $controller->mostrarEmpleados(); // Asignar los resultados a $results

?>

<div class="table-container">
    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
        <thead>
            <tr class="has-text-centered">
                <th>#</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Title</th>
                <th>Title of Courtesy</th>
                <th>Birth Date</th>
                <th>Hire Date</th>
                <th>Address</th>
                <th>City</th>
                <th>Region</th>
                <th>Postal Code</th>
                <th>Country</th>
                <th>Home Phone</th>
                <th>Extension</th>
                <th>Photo</th>
                <th>Notes</th>
                <th>ReportsTo</th>
                <th>Photo Path</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $row) : ?>
            <tr class="has-text-centered" >
                <td><?php echo $row['EmployeeID']; ?></td>
                <td><?php echo $row['LastName']; ?></td>
                <td><?php echo $row['FirstName']; ?></td>
                <td><?php echo $row['Title']; ?></td>
                <td><?php echo $row['TitleOfCourtesy']; ?></td>
                <td><?php echo $row['BirthDate']; ?></td>
                <td><?php echo $row['HireDate']; ?></td>
                <td><?php echo $row['Address']; ?></td>
                <td><?php echo $row['City']; ?></td>
                <td><?php echo $row['Region']; ?></td>
                <td><?php echo $row['PostalCode']; ?></td>
                <td><?php echo $row['Country']; ?></td>
                <td><?php echo $row['HomePhone']; ?></td>
                <td><?php echo $row['Extension']; ?></td>
                <td><?php echo $row['Photo']; ?></td>
                <td><?php echo $row['Notes']; ?></td>
                <td><?php echo $row['ReportsTo']; ?></td>
                <td><?php echo $row['PhotoPath']; ?></td>
                <td>
                    <a href="employee_update.php?employeeID=<?php echo $row['EmployeeID']; ?>" class="button is-success is-rounded is-small">Actualizar</a>
                </td>
                <td>
                    <form action="../controlador/ControladorEmployee.php?accion=eliminarEmpleado" method="post">
                        <input type="hidden" name="EmployeeID" value="<?php echo $row['EmployeeID']; ?>">
                        <button type="submit" class="button is-danger is-rounded is-small">Eliminar</button>
                    </form>
                    
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
