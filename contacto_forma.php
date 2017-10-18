<?php 

  $name = $_POST['name'];
  $email = $_POST['email'];
  $msg_subject = $_POST['msg_subject'];
  $msg = $_POST['msg'];

  // Correo a Profuels

  $to = "berthamz@gmail.com, atencionaclientes@profuels.mx";
  $subject = "Contacto desde Profuels.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
  $headers .= "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: <$email>" . "\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();
  $message="Nombre: $name <br> Correo: $email <br> Título: $msg_subject <br> Mensaje: $msg";

  mail($to, $subject, $message, $headers) or die("Error!");
  header("Location: contacto_gracias.php");
  die();

?>