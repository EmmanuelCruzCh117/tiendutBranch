<?php

 class Conexiones{
  var $conn;

  function conectar(){
    $conn=NULL;
    try{
      $conn = new PDO ('mysql:host=localhost;dbname=tiendaut',
      'root','');

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo 'Conectando a la base de datos <br> <br>';

    }catch(PDOException $e){
      die(print_r ('Error conectando con la base de datos: '
            . $e->getMesage()));
    }
    return $conn;
  }// Fin function conectar()
  
    function buscarUsuario($user, $pass){
      $con = $this->conectar();
 
      $consulta = 'SELECT usuario 
                    FROM usuarios 
                    WHERE usuario=:usuario         
                    AND contrasena=:pass';
                     
      $stmt = $con->prepare($consulta);
      $stmt->execute(array(':usuario'=>$user,':pass'=>$pass));
      $registro = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $numRegistros = count($registro);

      return $numRegistros;
    }
  
    function insertarUsuario($names,$pass,$email,$addres,$tel,$user){
    $con = $this->conectar();

    $stmt = $con->prepare('INSERT INTO usuarios(id,nombre,contrasena,correo,direccion,telefono,usuario) VALUES (NULL,:names, :pass, :email, :addres,:tel,:user)');
    $rows = $stmt->execute(array(':names'=>$names,
                                  ':pass'=>$pass,
                                  ':email'=>$email,
                                  ':addres'=>$addres,
                                  ':tel'=>$tel,
                                  ':user'=>$user,));
    return $rows;
      }

      function buscarProducto(){
              $con = $this->conectar();

              $consulta = 'SELECT * FROM producto';
              $stmt = $con->prepare($consulta);
              $stmt ->execute();
              $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);


              return $registros;
            }

    function insertarComentario($name,$email,$asunto,$msg){
        $con = $this->conectar();

        $stmt = $con->prepare('INSERT INTO comentarios(fecha,id,nombre,correo,asunto,mensaje) VALUES (NULL,NULL,:names, :email, :asunto, :msg)');
        $rows = $stmt->execute(array(':names'=>$name,
                                    ':email'=>$email,
                                    ':asunto'=>$asunto,
                                    ':msg'=>$msg));
        return $rows;
      }
    }

  ?>