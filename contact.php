<?php

require("sendgrid-php/sendgrid-php.php");

 $clientEmail = addslashes(trim($_POST['email']));
 $message = addslashes(trim($_POST['message']));



$from = new SendGrid\Email(null, $clientEmail);
$subject = "LTD+";
$to = new SendGrid\Email(null, "info@parkingap.com.uy");
$content = new SendGrid\Content("text/plain", $message);
$mail = new SendGrid\Mail($from, $subject, $to, $content);


$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$array = "Mensaje enviado con éxito";
$response = $sg->client->mail()->send()->post($mail);
echo json_encode($array);



