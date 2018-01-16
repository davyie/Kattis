<?php
/*
Grupp 5 - Invictus Watches 
Management med IT
Webbprogrammeringens grunder
Södetörns Högskola 
2015-12-02
*/
//Kopplar till databasen. 
function connect_db() { 
	
	date_default_timezone_set('Europe/Stockholm');

	// vanliga värden hos er är        root          ""       måste definieras
	// 127.0.0.1 är localhost, användarnamn, lösenord, databasens namn
	//$mysqli = new mysqli("localhost", "root", "", "invictus");
    $mysqli = new mysqli("10.209.1.157", "208922_dq37583", "invictus", "208922-invictuswatches");

	
	if (!$mysqli->set_charset("utf8")) {
    	echo "Error loading character set utf8: %s\n". $mysqli->error;
	} else {
 		//echo "Current character set: %s\n". $mysqli->character_set_name();
	}

	if ($mysqli->connect_errno) {
	    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	return $mysqli;
}
//Tittar ifall användaren har matat in rätt email och lösenord. 
function check_credentials($email, $pass) {
 if($mysqli = connect_db()) {
 	$sql = "SELECT * FROM kund WHERE email='".$email."' and pass='".$pass."'";
 	$result = $mysqli->query($sql);
 	 //print_r($mysqli->error);
 	 if($result->num_rows==1) {
 	 	return $result->fetch_array(); //returnerar användarinformation
 	 } else {
 	 	return false;
 	 }
 } 
}



?>