<?php

require("sendgrid-php/sendgrid-php.php");

$clientEmail = addslashes(trim($_POST['email']));
$message = addslashes(trim($_POST['message']));

$from = new SendGrid\Email(null, "clientEmail");
$to = new SendGrid\Email(null, "info@parkingap.com.uy");
$content = new SendGrid\Content("text/plain", "message");
$mail = new SendGrid\Mail($from, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

