<?php



if($_POST) {

    // Enter the email where you want to receive the message
    $emailTo = 'info@parkingap.com.uy';

    $clientEmail = addslashes(trim($_POST['email']));
    $message = addslashes(trim($_POST['message']));

    	$headers = "From: " . $clientEmail . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
		mail($emailTo, $message, $headers);
	}
    
	
	
    echo json_encode($array);

}

?>
