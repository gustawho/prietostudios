<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['subject'];

$mail_to = 'me@gustawho.com';
$subject = 'Mensaje de contacto en Prieto Studios'.$field_name;

$body_message = 'De: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Mensaje: '.$field_message;

$headers = 'De: '.$field_email."\r\n";
$headers .= 'Respuesta a: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('¡Gracias por tu mensaje! te contactaremos tan pronto como podcamos.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('No se pudo enviar tu mensaje ¯\_(ツ)_/¯ También puedes contactarnos en nuestras redes sociales');
		window.location = 'index.html';
	</script>
<?php
}
?>
