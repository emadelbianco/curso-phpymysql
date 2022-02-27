<?php
$nombre = $_POST["Nombre"];
$apellido = $_POST["Apellido"];
$edad = $_POST["Edad"];
$correo = $_POST["Correo"];
$motivo = $_POST["Consulta"];
$mensaje = $_POST["Mensaje"];

include ('conexion.php');

$datita = mysqli_query($conexion, "INSERT INTO consultas VALUES ('$nombre', '$apellido', $edad, '$correo', '$motivo', '$mensaje', default )" );

$dat = mysqli_close($conexion);

header("Location: contacto.php?ok")

?>