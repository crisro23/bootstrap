<?php
    $destino= "cristianpare@gmail.com";
    $nombre = $_POST["nombre"]
    $correo = $_POST["correo"]
    $telefono = $_POST["telefono"]
    $mensaje = $_POST["mensaje"]
    $contenido= "Nombre:" . $nombre . "\ncorreo: " . $correo.  "\nTelefono: " . $Telefono  . "\nMensaje: "  . $mensaje;
    $enviado="index.html#enviado";
mail($destino,"Contacto",$contenido);
header("Location:$enviado");
?>