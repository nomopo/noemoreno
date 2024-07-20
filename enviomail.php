<?php

include_once 'vendor/autoload.php';
$secretKey = '6Lc00dkpAAAAAAlrTkwdFYAZQ6ladIPYd0SiNyEz';

use Nette\Mail\Message;
use Nette\Mail\SendmailMailer;
if($_POST){

    $postData = $_POST;
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $servicio = $_POST['servicio'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $pregunta = $_POST['pregunta'];
}

//validamos el recaptcha
if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $api_url = "https://www.google.com/recaptcha/api/siteverify";
    $resq_data = array(
        'secret' => $secretKey,
        'response' => $_POST['g-recaptcha-response'],
        'remoteip' => $_SERVER['REMOTE_ADDR']
    );

    $curlConfig = array(
        CURLOPT_URL => $api_url,
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => $resq_data
    );

    $ch = curl_init();
    curl_setopt_array($ch, $curlConfig);
    $response = curl_exec($ch);
    curl_close($ch);

    //Decode JSON data API response in array
    $responseData = json_decode($response);

    if ($responseData->success == true && $responseData->score > 0.5) {
        sendEmail($nombre, $apellidos, $servicio, $email, $telefono, $pregunta);
    }
}

function sendEmail($nombre, $apellidos, $servicio, $email, $telefono, $pregunta)
{

    $mail = new Message;
    $mail->setFrom('info@noemoreno.es')
        ->addTo($email)
        ->setSubject('Asunto del correo')
        ->setBody("Nombre: $nombre \n Apellidos: $apellidos \n Servicio: $servicio \n Email: $email \n Teléfono: $telefono \n Pregunta: $pregunta");

    $mailer = new SendmailMailer;

    $mailer->send($mail);
    header("Location: contactar.php");
}
