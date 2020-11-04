<?php
  try{
    $con = new PDO ('mysql:host=localhost;dbname=tiendaut',
    'root','');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conectando a la base de datos <br> <br>';

    
// -------------------------Busca todos---------------------------------
    //Busca todos los registros de la tabla y los regresa
/*
    $stmt = $con->prepare('SELECT nombre FROM usuario');
    $stmt -> execute();
    while($datos = $stmt->fetch()) {
      echo 'Nombre: ' . $datos[0] . '<br>';

    }*/
// -------------------------Buscar---------------------------------
 /*   $user = 'Emmanuel';

    $stmt = $con->prepare('SELECT nombre, correo FROM usuario WHERE nombre=:usuario');
    $stmt->bindParam(':usuario', $user, PDO::PARAM_STR);
    //$stmt->execute(array(':usuario'=>$user));
     $stmt -> execute();
    
  
    while($datos = $stmt->fetch()) {
      echo 'Nombre: ' . $datos[0] . '<br> Correo: ' . $datos[1];
    }
// --------------------------Insertar--------------------------------
    $user = 'Fernanda';
    $pass = '1111';
    $correo = 'ferh@micorreo.com';
    $dir='Camino Real 53';
  $stmt = $con->prepare('INSERT INTO usuario(nombre,contraseña,correo,dirección) VALUES (:user, :pass, :email, :addres)');
  $rows = $stmt->execute(array(':user'=>$user,
                      ':pass'=>$pass,
                      ':email'=>$correo,
                      ':addres'=>$dir));

  if($rows == 1){
    echo 'Inserción correcta';
  }
  // ---------------------------Modificar-------------------------------

  $user = 'Janet Fernanda';
    $pass = '1111';
    $correo = 'ferh@micorreo.com';
    $dir='Camino Real 53';
  $stmt = $con->prepare('UPDATE usuario SET nombre=:user WHERE correo=:email');
  $rows = $stmt->execute(array(':user'=>$user,':email'=>$correo));

  if($rows > 0){
    echo 'Modificación correcta';
  }
// -------------------------Eliminar---------------------------------

$user = 'Gabriel';
$stmt = $con->prepare('DELETE FROM usuario WHERE nombre=:user');
$rows = $stmt->execute(array(':user'=>$user));

if($rows > 0){
  echo 'Eliminaste a ' . $user . ' de la BD';
}
*/ 
  }
    catch(PDOException $e){
      die('Error conectando con la base de datos: '
      . $e->getMesage());
    }

// ----------------------------------------------------------
?>