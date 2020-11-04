<?php
include('conexion.php');

$obj =new Conexiones;

$usuario    = $_POST['newUser'];
$pass       = $_POST['newPassword'];
$email      = $_POST['newEmail'];
$addres     = $_POST['newAdress'];
$tel     = $_POST['newPhone'];
$name     = $_POST['newName'];

$inser = $obj->insertarUsuario($name,$pass,$email,$addres,$tel,$usuario); 

if($inser == 1){
  $datos = array('dato' => 'ok');
}else{
  $datos = array('dato' => 'no');
}

echo json_encode($datos, JSON_FORCE_OBJECT);
?>