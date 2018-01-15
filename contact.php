<?php

require("sendgrid-php/sendgrid-php.php");



$from = new SendGrid\Email(null, "clientEmail@gmail.com");
$subject = "LTD+";
$to = new SendGrid\Email(null, "info@parkingap.com.uy");
$content = new SendGrid\Content("text/plain", "message");
$mail = new SendGrid\Mail($from, $subject, $to, $content);


$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();


