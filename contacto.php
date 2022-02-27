<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
    <h2>Contáctenos</h2>
        <form method="post" action="enviar_consulta.php">
            <input class="form-control" type="text" name="Nombre" placeholder="Nombre" maxlength="50" required>
            <input class="form-control" type="text" name="Apellido" placeholder="Apellido" maxlength="50" required>
            <input class="form-control" type="number" name="Edad" placeholder="Edad" maxlength="3" required>
            <input class="form-control" type="email" name="Correo" placeholder="Correo Electronico" maxlength="100" required>
            <input class="form-control" type="text" name="Consulta" placeholder="Motivo de Consulta" maxlength="20" required>
            <textarea class="form-control" type="text" name="Mensaje" placeholder="Mensaje" maxlength="500" rows="6" required></textarea>
            <input class="btn btn-secondary btn-l" type="submit" value="Enviar Consulta">
        </form>
        <?php
            if (isset($_GET['ok'])) {
                echo "<p> Consulta Enviada! </p>";
            }
        ?>
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>