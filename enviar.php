<?php
// Recibimos los datos del formulario de contacto mediante el método POST
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Configuramos los destinatarios del correo electrónico
$destinatario = 'destinatario@tshn.com'; // Cambiar por el correo electrónico del destinatario

// Configuramos el asunto y cuerpo del correo electrónico
$asunto = 'Nuevo mensaje de contacto desde el sitio web de TSHN';
$cuerpo = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";

// Enviamos el correo electrónico utilizando la función mail() de PHP
if (mail($destinatario, $asunto, $cuerpo)) {
  // Si el correo electrónico se envió correctamente, redirigimos al usuario a una página de confirmación
  header('Location: confirmacion.html');
} else {
  // Si el correo electrónico no se pudo enviar, mostramos un mensaje de error
  echo 'Ocurrió un error al enviar el mensaje. Por favor, intenta de nuevo más tarde.';
}
?>
