<?php

  $idUsuario = $_POST['idUsuario'];
  include "../../../clases/Usuarios.php";
  $Usuarios = new Usuarios();
  $datos = $Usuarios->obtenerDatosUsuario($idUsuario);
  echo json_encode($datos);

?>