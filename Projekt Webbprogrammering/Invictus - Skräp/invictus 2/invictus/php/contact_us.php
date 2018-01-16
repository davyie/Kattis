<?php
/*
	Skriptet kräver:
	(Statiska variabler som definieras här)
	$to = en mottagaradress (du ska skriva in din egen där)
	
	(Variabler som ska komma från formuläret)
	$email = adressen till den som fyller i , inputfältet måste ha attributet name="email" 
	$subject = ämne, det måste finnas ett inputfält attributet name="subject"
	$realname = namn, det måste finnas ett inputfält med attributet name="realname"
*/

$to = "invictuswatches@gmail.com";
$email = "email";
$subject = "fornamn";
$realname = "efternamn";
$headers = "message";


$message = "";

foreach($_POST as $key => $value){
	if($key == "email"){$email = $value;}
	else if($key == "subject"){$subject = $value;}
	else if($key == "realname"){$realname = $value;}
	else{$message .= "<p><strong>".$key.": </strong>".$value."</p>";}
}

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'To: '.ucwords($realname) . "\r\n";
$headers .= 'From: '.ucwords($to) . "\r\n";

if($email != "noaddress"){
	if(mail($to, $subject, $message, $headers)){
		 echo nl2br("<h3>Ditt meddelande har skickats</h3>
		 <strong>Mottagare:</strong> $to
		 svar skickas till: $email
		 <strong>&auml;mne:</strong> $subject
		 <strong></strong>
		 $message");
	}else{
		"Det gick inte att skicka ditt meddelande";
	}
} else {
	echo "Du m&aring;ste skriva in en epostadress";
}
?>