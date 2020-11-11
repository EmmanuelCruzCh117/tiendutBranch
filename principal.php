<?php

include('assets/data/conexion.php');

$obj =new Conexiones;

$res = $obj->buscarProducto();

$temp =  $res;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/reset.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="assets/css/estilos.css">


    <title>Página principal</title>
</head>

<body>
    <header id="header">
        <nav class="navbar navbar-default navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="principal.html">
                    <img src="assets/img/logo.PNG" width="150" alt="">
                </a>
                <!-- .navbar-brand -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link link-menu" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-menu" href="#">Acerca</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-menu" href="#">Características</a>
                        </li>
                        <!--
				      <li class="nav-item">
				        <a class="nav-link link-menu" href="producto.html">Producto</a>
					  </li>
					  -->
                        <li class="nav-item">
                            <a class="nav-link link-menu" href="#">Testimonios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-menu" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-menu" href="contacto.html">Contacto</a>
                        </li>
                    </ul>
                </div>
                <!-- .collapse -->
            </div>
            <!-- .container -->
        </nav>
        <!-- .navbar -->
    </header>
    <!-- header -->

    <section id="producto">
        <div class="container">
            <div class="row justify-content-md-center espacio-row">
                <div class="col-md-6">
                    <h1>Producto</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <!--</div>
		<div class="container borde-capa">-->
            <div class="row justify-content-md-center espacio-row">
                <div class="col-md-3">
                    <img src=<?php print($temp[0]['img'] );?> class="img-fluid" width="250" alt="">
                    <p><strong><?php print($temp[0]['nom_prod']);?></strong></p>
                    <p><strong>$<?php print($temp[0]['prec_venta']);?></strong></p>
                    <button type="button" class="btn btn-outline-light">Comprar</button>
                </div>
                <div class="col-md-3">
                    <img src=<?php print($temp[1]['img'] );?> class="img-fluid" width="250" alt="">
                    <p><strong><?php print($temp[1]['nom_prod']);?></strong></p>
                    <p><strong>$<?php print($temp[1]['prec_venta']);?></strong></p>
                    <button type="button" class="btn btn-outline-light">Comprar</button>
                </div>
                <div class="col-md-3">
                    <img src=<?php print($temp[2]['img'] );?> class="img-fluid" width="250" alt="">
                    <p><strong><?php print($temp[2]['nom_prod']);?></strong></p>
                    <p><strong>$<?php print($temp[2]['prec_venta']);?></strong></p>
                    <button type="button" class="btn btn-outline-light">Comprar</button>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <p>Copyright © 2020 SMARTWATCH | Todos los derechos reservados </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>