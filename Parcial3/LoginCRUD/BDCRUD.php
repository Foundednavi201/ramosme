<?php
      $conn = mysqli_connect('localhost','root','I18100219','ramosme');
      if(!$conn)
      {
        die("No se pudo conectar con la base de datos".mysqli_connect_error());
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="estilos/estiloCRUD.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!--Función para seleccionar todos los checkboxes-->
  <script type="text/javascript">
    $(document).ready(function(){
      $("#checkAll").click(function(){
        if($(this).is(":checked")){
          $(".checkItem").prop('checked', true);
        }
        else
        {
          $(".checkItem").prop('checked', false);
        }
      });
    });
  </script>
</head>

<body class="bg-info">

<script type="text/javascript">

function Confirmar()
{
  var mensaje = confirm("Está seguro de que desea ejecutar la operación de eliminación?");

  if(mensaje)
  {
    <?php
    if(isset($_POST['del']))
    {
      if(isset($_POST['id']))
      {
        foreach($_POST['id'] as $id)
        {
          $query = "DELETE FROM Productos WHERE IDProducto='$id'";
          mysqli_query($conn,$query);
        }
      }
    }
    ?>
  }
  else
  {
    alert("Se ha cancelado la eliminación");
  }
}
</script>

  <?php
    $select = "SELECT * FROM Productos";
    $result=mysqli_query($conn,$select);
    ?>
  <form action="BDCRUD.php" method="post">
    <div class="container">
      <div class="row justify-content-center mt-2">
        <div class="col-md-6 bg-light rounded p-3">
          <h2 class="text-center">Tabla de Productos</h2>
          <table class="table">
            <thead>
              <tr>
                <td colspan="5">
                  <input type="submit" name="del" value="Eliminar" onclick="Confirmar()" class="btn btn-danger">
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" id="checkAll"></th>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody>
            <?php
              while($row=mysqli_fetch_array($result)){
                $IDProd = $row['IDProducto'];
                $nomProd = $row['Nombre'];
                $CantProd = $row['Cantidad'];
                $PrecProd = $row['Precio'];
            ?>
              <tr>
              <td><input type="checkbox" class="checkItem" value="<?= $row['IDProducto'] ?>" name="id[]"></td>
              <td><?php echo $IDProd;?></td>
              <td><?php echo $nomProd?></td>
              <td><?php echo $CantProd?></td>
              <td><?php echo $PrecProd?></td>
              <td><a href="EditProd.php?edit=<?php echo $IDProd?>" class="btn btn-success">Editar</a></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </form>
  
  <form action="AggProducto.php" class="frmagg">
    <input type="submit" value="Agregar un producto" class="btnAgg">
  </form>

</body>
</html>
