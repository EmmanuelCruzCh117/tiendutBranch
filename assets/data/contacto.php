<?php
include('conexion.php');

$obj =new Conexiones;

$asunt      = $_POST['asunto'];
$msg        = $_POST['mensaje'];
$email      = $_POST['correo'];
$name       = $_POST['nombre'];

$coment = $obj->insertarComentario($name,$email,$asunt,$msg); 

if($coment == 1){
  $datos = array('dato' => 'ok');
}else{
  $datos = array('dato' => 'no');
}

echo json_encode($datos, JSON_FORCE_OBJECT);
?>