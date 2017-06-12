<?php
 $destino = "josue.mart@live.com.mx";
 $nombre = $_POST["nombre"];
 $email = $_POST["email"];
 $telefono = $_POST["telefono"];
 $asunto = $_POST["asunto"];
 $mensaje = $_POST["mensaje"];
 $contenido = "Nombre: ". $nombre . "\nCorreo: " .$email ."\nTelefono: " . $telefono ."\nAsunto:" .$asunto . "\nMensaje: " .$mensaje;
mail($destino, $asunto, $contenido); //Parametros de mail-> (destino,asunto, contenido)
header("Location:gracias.php");
?>