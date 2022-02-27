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
   	 <h2>Catálogo</h2>
   	 <nav id="bot_catalogo">
   	 	<ul>
   	 		<li><a href="catalogo.php?id=sc">Sillón Capri</a></li>
   	 		<li><a href="catalogo.php?id=mi">Mesa Ipanema</a></li>
   	 		<li><a href="catalogo.php?id=bv">Banco Venecia</a></li>
   	 	</ul>
   	 </nav>
   	 <?php 
   	 if (isset($_GET['id'])) {
   	 		switch ($_GET['id']) {
   	 			case 'sc':
   	 				$producto= 'Sillón Capri';
   	 				$precio= 345.00;
   	 				$caracteristicas= 'Concevida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
   	 				$imagen='sillon1.jpg';
   	 			break;
   	 			case 'mi':
   	 				$producto= 'Mesa Ipanema';
   	 				$precio= 500.00;
   	 				$caracteristicas= 'Se trata de una colección de muebles de madera de eucalipto, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
   	 				$imagen='ipanema.jpg';
   	 			break;
   	 			case 'bv':
   	 				$producto= 'Banco Venecia';
   	 				$precio= 450.00;
   	 				$caracteristicas= 'Se trata de una colección de muebles de madera de eucalipto, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
   	 				$imagen='venecia.jpg';
   	 			break;
   	 		}			
   	 ?>
   	<div id="datos">
   		<h3><?php echo $producto; ?></h3>
   		<p>Características: <?php echo $caracteristicas; ?></p>
   		<p>Precio: $<?php echo $precio; ?></p>
   	</div>
   	<div id="img_catalogo">
   		<img src="imagenes/<?php echo $imagen; ?>">
   	</div>
   	<?php } else { ?>
   	<p>Bienvenido a nuestro catálogo. Seleccione uno de nuestros productos.</p>
   	<?php } ?>	
	</section>
	
<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>