<?php
$destino= "yonyrivera93@gmail.com";
$Nombre = $_POST["Nombre"];
$Correo = $_POST["Correo"];
$Telefono = $_POST["Telefono"];
$mensaje = $_POST["mensaje"];
    
$contenido = "Nombre: " .$Nombre "\nCorreo: " . $Correo . "\nTelefono: " . $Telefono . "\nmensaje: " . $mensaje;
mail($destino,"Contacto", $contenido);
header("Location:gracias.html");
?>
