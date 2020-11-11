<?php

  include('conexion.php');

  $obj =new Conexiones;
  $res = $obj->buscarProducto();
  print_r($res);

  echo '<br><br>';

  foreach($res as $filas){
    echo 'Id: ' . $filas['id_prod'] . '<br>';
    echo 'Nombre: ' . $filas['nom_prod'] . '<br>';
    echo 'Descripción: ' . $filas['desc_prod'] . '<br>';
    echo 'Precio Venta: ' . $filas['prec_venta'] . '<br>';
    echo 'Precio Compra: ' . $filas['prec_comp'] . '<br>';
    echo 'Stock: ' . $filas['stock'] . '<br>';
    echo 'URL img: ' . $filas['img'] . '<br>';
  }

/*
echo '<table>
<tr>
<trID</tr>
<tr>Nombre</tr>
<tr>Descripcion</tr>
<tr>Precio de Venta:</tr>
<tr>Precio de Compra:</tr>
<tr>Stock:</tr>
<tr>URL de imagen:</tr>

</tr>
';

foreach($res as $filas){
echo '<tr>';
echo '<tr>' . $filas['idPro'] . '<br>';
echo '<tr>' . $filas['nombre_producto'] . '<br>';
echo '<tr>' . $filas['descripcion_producto'] . '<br>';
echo '<tr>' . $filas['precio_venta'] . '<br>';
echo '<tr>' . $filas['precio_compra'] . '<br>';
echo '<tr>' . $filas['stock'] . '<br>';
echo '<tr>' . $filas['url_img'] . '<br><br>';
echo '</tr>';
}
echo '<table>';*/
?>