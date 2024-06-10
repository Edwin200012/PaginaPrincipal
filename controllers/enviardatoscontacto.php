<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// Cargar variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();


// Verificar el envio de los datos del formulario
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre_formulario_contacto'];
    $correo = $_POST['correo_formulario_contacto'];
    $asunto = $_POST['asunto_formulario_contacto'];
    $mensaje = $_POST['mensaje_formulario_contacto'];

    $mail = new PHPMailer(true);
    try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = $_ENV['HOST'];                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $_ENV['USERNAME'];                     //SMTP username
    $mail->Password   = $_ENV['PASSWORD'];                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = $_ENV['PORT'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->setFrom('edwinvazquezcal12@gmail.com', 'Remitente');


    //Añadir un destinatario
    $mail->addAddress('edwinvazquezcal12@gmail.com', 'Nombre Destinatario');
    //Contenido
    $mail->isHTML(true);
    $mail->Subject =  $asunto;
    $mail->Body    = "
            <h2>Contacto desde Arsha</h2>
            <p><strong>Nombre:</strong> $nombre</p>
            <p><strong>Correo:</strong> $correo</p>
            <p><strong>Asunto:</strong> $asunto</p>
            <p><strong>Mensaje:</strong><br>$mensaje</p>
    ";
    
    $mail->AltBody = strip_tags($_POST['mensaje_formulario_contacto']); // Cuerpo alternativo en texto plano

    $mail->send();
    header("Location: ../index.php");
    exit;
    } catch (Exception $e) {
        echo "El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
    }

}

else {
    echo 'Acceso no autorizado';
}


?>