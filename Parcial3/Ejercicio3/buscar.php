<?php
	$servername = "localhost";
    $username = "root";
  	$password = "I18100219";
  	$dbname = "ramosme";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM Productos";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM Productos";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>ID</td>
    					<td>Nombre</td>
    					<td>Cantidad</td>
    					<td>Precio</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['IDProducto']."</td>
    					<td>".$fila['Nombre']."</td>
    					<td>".$fila['Cantidad']."</td>
    					<td>".$fila['Precio']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }

    echo $salida;

    $conn->close();
?>