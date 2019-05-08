<?php
/**
 * Trabajador
 */
class Trabajador extends Conexion
{
  public $conexion;
  public $nombre;
  public $apellidos;
  public $precio_hora;


  function __construct()
  {
  }

  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["nombre"])||!isset($post["apellidos"])||!isset($post["precio_hora"])){
    } elseif($post["nombre"]=="") {
      echo'<script type="text/javascript">
        alert("No has introducido el nombre");
        </script>';
        $error=true;
    } elseif($post["apellidos"]=="") {
      echo'<script type="text/javascript">
        alert("No has introducido los apellidos");
        </script>';
        $error=true;
    } elseif($post["precio_hora"]=="") {
      echo'<script type="text/javascript">
        alert("No has introducido el precio hora");
        </script>';
        $error=true;
    } else {
      $error=false;
      $this->nombre=$post["nombre"];
      $this->apellidos=$post["apellidos"];
      $this->precio_hora=$post["precio_hora"];
    }
    return $error;
  }

  public function insercion(){
    $consulta="INSERT INTO trabajador (id, nombre, apellidos, precio_hora)
                VALUES ('', '$this->nombre', '$this->apellidos', '$this->precio_hora')";
    $this->conexion->query($consulta);
  }

  public function listarTrabajadores(){
    $consulta="SELECT * FROM `trabajador`";
    $resultado = $this->conexion->query($consulta);
    return $resultado;
  }

}

?>