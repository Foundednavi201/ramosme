<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar un producto</title>
    <link rel="stylesheet" href="estilos/styleAggProd.css"><!--Referencia a la hoja de estilo-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script><!--CDN de JQuery-->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script><!--Script para los símbolos de las redes sociales-->

  </head>
  <body>

      <form class="login-form" method="post">

      <div class="cajaTitulo">
        <h1>Editar un producto</h1>

        <?php
          $conn = mysqli_connect('localhost','root','I18100219','ramosme');
          if(isset($_GET['edit'])){
              $IDprod = $_GET['edit'];
          }

          $select = "SELECT * FROM Productos WHERE IDProducto='$IDprod'";
          $run = mysqli_query($conn,$select);
          $row_producto = mysqli_fetch_array($run);
          
          $producto_id = $row_producto['IDProducto'];
          $producto_nombre = $row_producto['Nombre'];
          $producto_cant = $row_producto['Cantidad'];
          $producto_precio = $row_producto['Precio'];
        ?>
      </div>

        <!-- Campo nombre de producto -->
        <div class="txtb">
          <h3>Nombre del producto</h3>
          <br>
          <input type="text" id="form_NomProd" name="nomProd" value="<?php echo $producto_nombre;?>">
          <!--<span data-placeholder="Nombre del producto"></span>-->
        </div>
        <!-- Campo cantidad -->
        <div class="txtb">
        <h3>Cantidad</h3>
          <input type="txtb" id="form_cant" name="cant" value="<?php echo $producto_cant;?>">
          <!--<span data-placeholder="Cantidad"></span>-->
        </div>

        <!-- Campo precio -->
        <div class="txtb">
        <h3>Precio</h3>
          <input type="txtb" id="form_Precio" name="precio" value="<?php echo $producto_precio;?>">
          <!--<span data-placeholder="Precio"></span>-->
        </div>

        <!-- Botón confirmar edición -->
        <input type="submit" class="logbtn" value="Confirmar" name="btnConfirmar">
        <br>
        <a class="btn btn-success" href="BDCRUD.php">Revisar BD</a>  <a class="btn btn-success" href="EditProd.php?edit=<?php echo $IDprod;?>">Reiniciar datos</a>
      </form>

      <?php
        $conn = mysqli_connect('localhost','root','I18100219','ramosme');

        if(isset($_POST['btnConfirmar']))
        {
            $Nombre_ProductoED = $_POST['nomProd'];
            $Cantidad_ProductoED = $_POST['cant'];
            $Precio_ProductoED = $_POST['precio'];

            $update = "UPDATE Productos SET Nombre='$Nombre_ProductoED',Cantidad='$Cantidad_ProductoED',Precio='$Precio_ProductoED'
            WHERE IDProducto='$IDprod'";

            $run_update = mysqli_query($conn,$update);
            if($run_update == true)
            {
              ?>
               <h2> Se ha actualizado el producto correctamente.</h2>
               <?php
            }
            else
            {
              ?>
                <h2>No se ha podido actualizar el producto, intente de nuevo.</h2>
                <?php
            }
        }
      ?>
  </body>
</html>