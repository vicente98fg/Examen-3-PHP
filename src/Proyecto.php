<?php
/**
 * Proyecto
 */
class Proyecto extends Conexion
{
  public $conexion;


  function __construct()
  {
  }


  public function listarProyectos(){
    $consulta="SELECT * FROM `proyecto`";
    $resultado = $this->conexion->query($consulta);
    return $resultado;
  }

  
}

?>