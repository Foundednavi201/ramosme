<?php

$servidor = "localhost";
$usuario = "root";
$password = "I18100219";
$db = "ramosme";

try
{
    $conexion = new PDO("mysql:host=$servidor;dbname=$db", $usuario, $password);
}
catch(PDOException $error){
    echo "Ha ocurrido un error al conectar a $db";
    echo $error->getMessage();
    exit();
}

$cadenaConsulta = "SELECT * FROM Productos";
$consulta = $conexion->prepare($cadenaConsulta);
$consulta->execute();

while($registro = $consulta->fetch()){
    echo $registro['IDProducto'].'||'.
         $registro['Nombre'].'||'.
         $registro['Cantidad'].'||'.
         $registro['Precio'].'||'.'<br>';
}
$consulta->closeCursor();
?>