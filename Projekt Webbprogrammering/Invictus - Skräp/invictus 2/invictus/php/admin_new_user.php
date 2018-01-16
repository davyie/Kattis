<?
	
	// Definera en funktion som sköter uppkoppling till databasen
	function connect_db() { 
	
		// Här ska du lägga in anslutningsinformation för att kunna ansluta dig mot din databas:
		// DittAnvändarID, DittLösen och den databas du har skapat tabellerna i.
	
	$mysqli = new mysqli('localhost', 'root', '', 'labb3');//ändra databas namn och localhost. 
	
		//Kontrollerar teckentabell
	if (!$mysqli->set_charset("utf8")) {
    	echo "Fel vid inställning av teckentabell utf8: %s\n". $mysqli->error;
	} else {
 		//echo "Nuvarande teckenkodningstabell: %s\n". $mysqli->character_set_name();
	}

	if ($mysqli->connect_errno) {
	    echo "Misslyckades att ansluta till MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	return $mysqli;
}
	
	
	
	?>
	<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title></title>		
	</head>
	<body>
	
	<?php
include_once "html_headers.php";// ändra här. 
	// Om användaren klickat på formulärets spara-knapp
	if(isset($_POST['spara'])){
	
		// Hämta in värden från formulär med hjälp av POST
		
		$produktnummer = $_POST['produktnummer'];//ändra här..... 
		$produktnamn = $_POST['produktnamn'];
		$beskrivning = $_POST['beskrivning'];
		$pris = $_POST['pris'];	
		$produktbild = $_POST['produktbild'];	
		$lagersaldo = $_POST['lagersaldo'];	
		$type = $_POST['type'];
        $isonoffer = $_POST['isonoffer'];
	
		// SQL-fråga (INSERT) 
		$sql = "INSERT INTO produkter (produktnummer, produktnamn, beskrivning, pris, produktbild, lagersaldo, type, isonoffer) VALUES ('$produktnummer','$produktnamn','$beskrivning','$pris','$produktbild','$lagersaldo','$type', '$isonoffer')";//Ändra här också. 
	
		// Kör frågan
		if($mysqli = connect_db()) {
 	
		$mysqli->query($sql);
		print_r($mysqli->error);
		}
		
		
	   echo html_header();// ändra här 
		// Skriv ut meddelande och länk tillbaka till startsidan
		echo "Produkten är nu inlagd i databasen<br />";
		echo "<a href='index.php'>Tillbaka till produktsidan</a>";
        echo html_footer();//ändra här 
	}

	// Om användare INTE klickat på spara-knapp
	else{

		
		?>
		
		<!-- Ett formulär med samtliga kolumner på den aktuella raden -->
		<!--  PersonId skickas med i querystring, detta görs i formulärets action-attribut -->
		<!-- I varje cell skrivs en kolumn ut, detta med hjälp av variabeln $myRow (arrayen som resultatet av SQL-frågan sparats i) -->
		<? echo html_header();?>
		<form action="lagginprodukt.php" method="post"><!--ändra här-->
			<table cellpadding="3" cellspacing="0" border="1">
				
				<tr><td>Produktnummer</td><td><input type="text" name="produktnummer"  /></td></tr>
				<tr><td>Produktnamn</td><td><input type="text" name="produktnamn"  /></td></tr>
				<tr><td>Beskrivning</td><td><input type="text" name="beskrivning"  /></td></tr>
				<tr><td>Pris</td><td><input type="text" name="pris"  /></td></tr>
				<tr><td>Produktbild</td><td><input type="text" name="produktbild"  /></td></tr>
				<tr><td>Lagersaldo</td><td><input type="text" name="lagersaldo"  /></td></tr>
				<tr><td>Typ</td><td><input type="text" name="type"  /></td></tr>
                <tr><td>Isonoffer</td><td><input type="text" name="isonoffer"  /></td></tr>
				<tr><td colspan="2"><input type="submit" name="spara" value="Spara" />
			</table>
		</form>
        <? html_footer();?><!--ändra här-->
		<?
		}
		?>

		
	</body>
</html>