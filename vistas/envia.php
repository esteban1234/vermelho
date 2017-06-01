<?php
//Librerías para el envío de mail
require('../phpmailer/phpmailer/class.phpmailer.php');
//PHPMailer Object
$mail = new PHPMailer();

// Recoger los valores del Formulario

$nombre = $_POST['txtnombre'];
$telefono = $_POST['txttelefono'];
$correo = $_POST['txtcorreo'];
$comentario = $_POST['txtcomentario'];

$mail->CharSet = 'utf-8';
//From email address and name
$mail->From = $correo;
$mail->FromName = $nombre;

//To address and name
$mail->addAddress("info@vermelho.com.mx");


$mail->isHTML(true);

$mail->Subject = "Cotización VERMELHO";
$mail->Body = "
              <b>Telefono: </b>.$telefono.<br/>
              <b>Comentario: </b>.$comentario.<br/>";
// $mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send())
{
    // echo "Error al enviar Mensaje: " . $mail->ErrorInfo;
    echo ("<SCRIPT LANGUAGE='JavaScript'>
          window.alert('Error al Enviar MENSAJE')
          window.location.href='contacto.php'
        </SCRIPT>");

}
else
{
  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Mensaje Enviado Correctamente')
        window.location.href='contacto.php'
      </SCRIPT>");


}
?>
