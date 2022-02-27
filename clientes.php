<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Clientes</h2>
    <?php
        include ('conexion.php');
        $consulta = mysqli_query($conexion, 'SELECT * FROM pedidos_cliente');

        while ($listar = mysqli_fetch_assoc($consulta)) { ?>
            <div class="pedidos">
                <h4>PEDIDO N° <?php echo "$listar[id_pedido]"; ?></h4>
                <h5><?php echo "$listar[producto]"; ?>, Cantidad: <?php echo "$listar[cantidad]"; ?> unidades</h5>
                <h3>Total a pagar: $<?php echo "$listar[precio]"; ?></h3>
            </div>    
    <?php } ?>
    
    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>