<?php

  include('conexion.php');

  $obj =new Conexiones;
  $res = $obj->buscarProducto();
  //print_r($res);
echo '<table>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Descripcion</th>
<th>Precio de Venta:</th>
<th>Precio de Compra:</th>
<th>Stock:</th>
<th>URL de imagen:</th>
</tr>
';

  foreach($res as $filas){
    echo '<tr>';
    echo '<td>' . $filas['id_prod'] . '</td>';
    echo '<td>' . $filas['nom_prod'] . '</td>';
    echo '<td>' . $filas['desc_prod'] . '</td>';
    echo '<td>' . $filas['prec_venta'] . '</td>';
    echo '<td>' . $filas['prec_comp'] . '</td>';
    echo '<td>' . $filas['stock'] . '</td>';
    echo '<td>' . $filas['img'] . '</td><br>';
    echo '</td>';
  }
  echo '<table>';

  json_encode($res, JSON_FORCE_OBJECT);
  echo '<br><br><br>';
  print_r($res);


  echo '<br><br><br>';
  $temp = array();

  $temp =  $res;

  print('Id Producto: '. $temp[2]['id_prod'] . '<br>');
  print('Nombre: '. $temp[2]['nom_prod'] . '<br>');
  print('Precio de Venta: '. $temp[2]['prec_venta'] . '<br>');
  print('url imagen:' . $temp[2]['img'] . '<br>');



?>