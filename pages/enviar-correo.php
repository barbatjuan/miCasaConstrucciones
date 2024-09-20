<?php
  // Verificar que el formulario fue enviado correctamente
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $nombre = $_POST['first_name'];
    $apellido = $_POST['last_name'];
    $email = $_POST['email'];
    $telefono = $_POST['phone'];
    $comentarios = $_POST['comments'];

    // Destinatario del correo
    $to = "info@micasaconstrucciones.uy";

    // Asunto del correo
    $subject = "Nuevo contacto desde el formulario web";

    // Mensaje del correo
    $message = "
      Nombre: $nombre $apellido\n
      Email: $email\n
      Teléfono: $telefono\n
      Comentarios: $comentarios
    ";

    // Cabeceras del correo
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
      echo "Gracias, tu mensaje ha sido enviado exitosamente.";
    } else {
      echo "Lo siento, hubo un error al enviar tu mensaje.";
    }
  }
?>
