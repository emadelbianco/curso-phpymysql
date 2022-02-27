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
    <h2>Noticias</h2>
    <?php
        $noticias = array( 
            array('foto' => 'foto1.jpg', 'titulo' => 'La reconexión de la Feria del Mueble logra más de 7.000 visitantes' ,'cuerpo' => 'La Feria del Mueble Yecla (FMY) cerró este fin de semana su 59 edición tras batir todos sus registros históricos. Se logró doblar con creces el número de visitantes respecto a 2019. Desde la organización, se indicó 7.226 visitantes profesionales del sector, más de 2.000 cada jornada entre el 20 y el 22 de octubre.'), 
            array('foto' => 'foto2.jpg' , 'titulo' => 'Tras auge y baja, repunta demanda de muebles' ,'cuerpo' => 'La demanda de muebles en Argentina registró durante el segundo semestre de 2020 y el primer trimestre de 2021 un notable crecimiento en los pedidos y la fabricación, período que constituyó el pico de la demanda. Sin embargo, en los últimos meses, registró una ligera baja comparado con los mismos meses del año pasado pero que se reactivó en el último mes, según indicaron desde la Federación Argentina de la Industria Maderera y Afines (Faima).'),
            array('foto' => 'foto3.jpg' , 'titulo' => 'Quieromicama.com: los muebles que los chicos necesitan' ,'cuerpo' => 'quieromicama.com nace en el año 2012 con el objetivo de desarrollar un comercio 100% online de muebles infantiles y juveniles. Ellos realizan envíos directos de fábrica a todo el país y en 2016, abrieron su Showroom en Av. Córdoba 6081, CABA. para que los clientes puedan apreciar en formar presencial la calidad de su mobiliario. Hoy nos cuentan más sobre la experiencia brindada en esta nota exclusiva.' ),
            array('foto' => 'foto4.jpg', 'titulo' => 'Muebles sin casa' ,'cuerpo' => 'Las casas de los mallorquines se han ido encogiendo con los años mientras los muebles antiguos mantienen las mismas proporciones. Si a esto se suma el tsunami de la decoración nórdica, que se rumorea que ya está en retroceso, se confirma que muebles tradicionales como el canterano, los imponentes armarios o arcones e incluso las camas que acogían a generaciones más pequeñas, han quedado fuera de la decoración actual.' ));
            for ($i=0; $i < count($noticias) ; $i++) {   
    ?>
    <div class="noti">
        <img src="imagenes/<?php echo $noticias [$i] ['foto']; ?>" >
        <h3><?php echo $noticias [$i] ['titulo']; ?></h3>
        <p><?php echo $noticias [$i] ['cuerpo']; ?></p>
    </div>
    <?php } ?>
    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>