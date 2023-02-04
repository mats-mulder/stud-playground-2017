
<?php

require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->setFrom('', 'StuDuction 2017');
$mail->addAddress('', 'StuDuction 2017');
$mail->Subject  = 'Nieuw bericht via website';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$text1 = $_POST['text1'];
$license_type = $_POST['license_type'];
$mail->IsHTML(true); 
$mail->Body = "
    <html>
    	<h3>Hoi Kees!</h3>
    	<p><b>Je hebt een nieuw bericht via het contactformulier:</b></p>
	    <p>Naam: ".$first_name." ".$last_name."</p>
	    <p>E-mail: <a>".$email."</a></p>
	    <p>Bericht: ".$text1."</p>
    </html>";
$mail->AltBody = '';
if(!$mail->send()) {
    
    $encoded = json_encode($responseArray);
    
    header('Content-Type: application/json');
    
    echo $encoded;
}
else {
    echo $responseArray['message'];
}

?>

