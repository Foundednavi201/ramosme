<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<a class="btn btn-danger" href="CerrarSesion.php">Cerrar Sesión</a>
<div class="container">
  <h2>Tabla Productos</h2>
    <?php
          $conn = mysqli_connect('localhost','root','I18100219','ramosme');
          if(isset($_GET['del']))
          {
             $del_nombre = $_GET['del'];
             $delete = "DELETE FROM Productos WHERE Nombre = '$del_nombre'";
             $run_delete = mysqli_query($conn,$delete);

             if($run_delete == true)
             {
               ?>
                <h3>Se ha eliminado el producto correctamente<h3>
              <?php
             }
             else
             {
               ?>
                <h3>Eliminación fallida, por favor intente de nuevo</h3>
               <?php
             }
          }
    ?>

  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Eliminar</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>

    <?php
        $conn = mysqli_connect('localhost','root','I18100219','ramosme');
        $select = "SELECT * FROM Productos";
        $run = mysqli_query($conn,$select);
        while($row_producto = mysqli_fetch_array($run)) {
        $producto_id = $row_producto['IDProducto'];
        $producto_nombre = $row_producto['Nombre'];
        $producto_cant = $row_producto['Cantidad'];
        $producto_precio = $row_producto['Precio'];
    ?>
      <tr>
        <td><?php echo $producto_id;?></td>
        <td><?php echo $producto_nombre;?></td>
        <td><?php echo $producto_cant;?></td>
        <td><?php echo $producto_precio;?></td>
        <td><a class="btn btn-danger" href="bdABC.php?del=<?php echo $producto_nombre;?>">Eliminar</a></td>
        <td><a class="btn btn-success" href="EditProd.php?edit=<?php echo $producto_nombre;?>">Editar</a></td>
      </tr>
        <?php } ?>
  </div>

    </tbody>
  </table>
</div>
<form action="AggProducto.php" class="frmagg">
  <input type="submit" value="Agregar un producto" class="btnAgg">
</form>
</body>
<style>
.frmagg
{
  text-align: center;
}

.btnAgg
{
  border-radius: 15px;
  width: 20%;
  height: 50px;
  border: none;
  background-color: rgb(46, 45, 45);
  margin-bottom: 10px;
  color: #fff;
  outline: none;
  cursor: pointer;
}

h3
{
  text-align: center;
  color: white;
}

h2
{
  text-align: center;
  color: white;
  margin-top: 10%;
}

.container
{
  background-color: rgb(46, 45, 45);
  margin-top: 15px;
  border-radius: 15px;
}

td,th
{
  color: white;
}

body
{
  background-image: url(estilos/img/Fondo.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
  min-height: 100vh;
  background-color: rgb(46, 45, 45);
}
</style>
</html>
