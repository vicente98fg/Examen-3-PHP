<?php

require './../src/Conexion.php';
require './../src/Trabajador.php';

$consulta = new Trabajador();
$consulta->conectar();
$error=$consulta->comprobarCampos($_POST);
$resultado = $consulta->listarTrabajadores();


?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    
  <?php

  if(isset($error)){
  if($error===false){
    $consulta->insercion();
    echo "<h4>La insercion de datos del trabajador ha sido un exito.</h4>";
    echo '<form action="index.php">
      <input type="submit" value="Volver" />
      </form>';
  } else {
    echo "<h4>La insercion de datos del trabajador ha fallado.</h4>";
    echo '<form action="index.php">
      <input type="submit" value="Volver" />
      </form>';
    } 
  }

  ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <h4>Trabajadores</h4>
  <table>
    <tr>
    <td><b>ID</b></td>
    <td><b>Nombre</b></td>
    <td><b>Apellidos</b></td>
    <td><b>Horas</b></td>
    </tr>

  <?php
  foreach ($resultado as $trabajador) {
    echo "<tr>";
    echo "<td>".$trabajador['id']."</td>";
    echo "<td>".$trabajador['nombre']."</td>";
    echo "<td>".$trabajador['apellidos']."</td>";
    echo "<td>".$trabajador['precio_hora']."</td>";
    echo "</tr>";
  }

  ?>


  </body>
</html>