<?php
	
	// Konstruera en SQL-fråga som hämtar alla poster från databasen 
	$sql = "SELECT * FROM kund";
	
	
	// Definera en funktion som sköter uppkoppling till databasen
	function connect_db() { 
	
		// Ansluter mig mot min databas och mina tabeller
	//$mysqli = new mysqli("localhost", "root", "", "invictus");
	$mysqli = new mysqli("10.209.1.157", "208922_dq37583", "invictus", "208922-invictuswatches");
	
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
	//Om anslutningen lyckas så skall frågan köras mot databasen och lagras i recordset
	if($mysqli = connect_db()) {
 	
 	$result = $mysqli->query($sql);
 	print_r($mysqli->error);
	}
	
	
	?>
	
	
<html>
	<head>
		<meta charset="utf-8">
		<title>Update</title>	
        <link rel="stylesheet" href="../css/sign_up.css"/>
        <link rel="stylesheet" href="../css/header.css"/>
        <link rel="stylesheet" href="../css/footer.css"/>
		<link rel="shortcut icon" href="../images/favicon.jpg" />
	</head>
	<body>
	<header>
    
<div>
   <a href="index.php" ><img src="../images/logo.png"/></a>
    </div>
    
    <nav id="navigation" class="global-navigation" role="navigation">
    <ul class="global">
        <li class="huvudmeny"><a href="watches.php">Watches</a>
        <ul class="drop">
        <li class="submeny"><a href="classic.php">Classic Watches</a></li>
        <li class="submeny"><a href="exclusive.php">Exclusive Watches</a</li>
        <li class="submeny"><a href="sport.php">Sport Watches</a>           </li>
        </ul>
        </li>
    <li class="huvudmeny"><a href="our_story.php">Our story</a>         </li>
    <li class="huvudmeny"><a href="social_media.php">Social media</a></li>
    <li class="huvudmeny"><a href="contact_us.php">Contact us</a>       </li>
     <li class="huvudmeny"><a class="aktiv" href="usersida.php">Account</a>
         <ul class="drop">
              <li class="submeny"><a href="logout.php">Log out</a></li>
        </ul>
            </li>
            <li class="huvudmeny"><a href="kassa.php"><img src="../images/guldkundkorg.png"/></a></li>
            </li>
    </ul>
	</ul>
</nav>
        
</header>
<table cellpadding="3" cellspacing="0" border="1">
				<tr>
				
				<?php
				// mysqli_num används för att räkna antal kolumner i tabellen. 
				// För varje kolumn skrivs sedan en cell som innehåller kolumnnamnet ut. 
				// Detta görs med mysqli-funktionen mysql_fetch_field_direct()
				
				for ($i=0; $i < mysqli_num_fields($result); $i++) {
				    echo "<th>" . mysqli_fetch_field_direct($result, $i)->name ."</th>";
				}
			
				// 1 extracellsom ska vara till länken skrivs ut
			//	echo "<th> </th><th> ";
	
				// While-loopen skriver ut poster i databasen i separata celler
				while($myRow = $result->fetch_array()) {
				
				    echo "<tr>";
				    echo "<td>" . $myRow['kundid'] . "</td>";
				    echo "<td>" . $myRow['fnamn'] . "</td>";
				    echo "<td> " . $myRow['enamn'] . "</td>";
					echo "<td> " . $myRow['adress'] . "</td>";	
				    echo "<td> " . $myRow['telefonnummer'] . "</td>";
				    echo "<td> " . $myRow['email'] . "</td>";
					echo "<td> " . $myRow['pass'] . "</td>";					
				    echo "<td> " . $myRow['postnummer'] . "</td>";
				    echo "<td> " . $myRow['postort'] . "</td>";
				    echo "<td> " . $myRow['usertype'] . "</td>";		    			    			    			    			    
	    
				    // Här följer de två cellerna för "Ändra" och "Radera"
				    // Länken får en querystring som kommer att få med "kundid" till sidan
				    // update_person.php, respektive delete_person.php
				    echo "<td><a href=up_person.php?kundid=" . $myRow['kundid'] . ">Ändra</a></td>";
				    
				    echo "</tr>";
				}
	
					
				?>
			</table>
		<footer>
    <div id="adress">
        Contact us
    <br>
    <br>
        Sturegatan 4
    <br>
        114 35 Stockholm
    <br>
        Sweden
    <br>
        <a href="mailto:invictuswatches@gmail.com">invictuswatches@gmail.com</a>
    <br>
        <a href="tel:+46 589-861-00">+46 589-861-00</a>
    </div>
    
    <div id="social">
        Social media
    <br>
    <br>
        <a href="https://www.instagram.com/invictuswatches/">
        <img src="../images/instagram.png" alt="instagram"/>
        </a>
        <a href="https://twitter.com/InvictusWatches">
        <img src="../images/twitter.png" alt="twitter" />     
        </a>
        <a href="https://www.facebook.com/invictuswatches/?notif_t=fbpage_fan_invite">
        <img src="../images/facebook.png" alt="facebook" />     
        </a>
    </div>
    
    <div id="account">
        Account
    <br>
    <br>
        <a href="logout.php">Log out</a>
 
    </div>
    
    <div id="payment">
        Payment methods
    <br>
    <br>
        <img src="../images/mastercard.png" alt="mc" />     
        <img src="../images/americanexpress.png" alt="amex" />     
        <img src="../images/visa.png" alt="visa" />     
        </div>
        </footer>
	</body>
</html>	