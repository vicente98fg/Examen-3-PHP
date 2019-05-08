<?php

require './../src/Conexion.php';
require './../src/Proyecto.php';

$consulta = new Proyecto();
$consulta->conectar();
$resultado = $consulta->listarProyectos();

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="main.css">
    <script type="text/javascript" src="./js/comprobar.js"></script>
  </head>
  <body>

  <?php
    if(isset($error)){
      if($error!="") echo "<h4>ERROR:$error</h4>";
    }
  ?>
    
  <h4>Nuevo Trabajador</h4>
    <form class="" action="registro.php" method="post">
      <div class="grupoFormItem">
        <label for="nombre"></label>
        <span class="formLabel">Nombre </span>
        <input type="text" name="nombre" value="">
      </div>
      <div class="grupoFormItem">
        <label for="apellidos"></label>
        <span class="formLabel">Apellidos </span>
        <input type="text" name="apellidos" value="">
      </div>
      <div class="grupoFormItem">
        <label for="precio_hora"></label>
        <span class="formLabel">Precio Hora </span>
        <input type="text" name="precio_hora" value="">
      </div>
      <input type="submit" name="" value="Añadir a la DB">
    </form>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <h4>Proyectos</h4>
    <table>
      <tr>
      <td><b>ID</b></td>
      <td><b>Nombre</b></td>
    </tr>

    <?php
    foreach ($resultado as $proyecto) {
      echo "<tr>";
      echo "<td>".$proyecto['id']."</td>";
      echo "<td>".$proyecto['nombre']."</td>";
      echo "</tr>";
    }

    ?>


    
  </body>
</html>