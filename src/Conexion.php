<?php
/**
 * Conexion
 */
class Conexion
{
  public $conexion;


  function __construct()
  {
  }

  public function conectar(){
    $this->conexion = new mysqli("localhost", "root", "", "proyectos");
    if ($this->conexion->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    } else {
      echo "Conectado a la base de datos";
    }
  }

  
}

?>