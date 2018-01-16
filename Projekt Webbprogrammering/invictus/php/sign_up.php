<?php
	/*
Grupp 5 - Invictus Watches 
Management med IT
Webbprogrammeringens grunder
Södetörns Högskola 
2016-01-08
*/
	// Definera en funktion som sköter uppkoppling till databasen
	function connect_db() { 
	
		// Här ska du lägga in anslutningsinformation för att kunna ansluta dig mot din databas:
		// DittAnvändarID, DittLösen och den databas du har skapat tabellerna i.
	
	//$mysqli = new mysqli('localhost', 'root', '', 'invictus');
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
	?>
	<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Sign Up</title>	
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
     <li class="huvudmeny"><a class="aktiv" href="testlog.php">Account</a>
         <ul class="drop">
            <li class="submeny"><a href="log_in.php">Log in</a></li>
            <li class="submeny"><a href="sign_up.php">Sign up</a</li>
        </ul>
        </ul>
            </li>
                        <li class="huvudmeny"><a href="kassa.php"><img src="../images/guldkundkorg.png"/></a></li>
            </li>
    </ul>
	</ul>
</nav>
        
</header>
	<?php
//Formuläret lägger till kund till databasen. 
session_start();
if(isset($_SESSION['kundkorg'])) {} else {
		$_SESSION['kundkorg'] = array();
	}
	// Om användaren klickat på formulärets spara-knapp
	if(isset($_POST['signup'])){
	
		// Hämta in värden från formulär med hjälp av POST
		
		$fnamn = $_POST['fnamn'];
		$enamn = $_POST['enamn'];
		$email = $_POST['email'];	
		$adress = $_POST['adress'];
		$postnummer = $_POST['postnummer'];	
		$postort = $_POST['postort'];	
		$telefonnummer = $_POST['telefonnummer'];		
		$password = $_POST['password'];
	
		// SQL-fråga (INSERT) 
		$sql = "INSERT INTO kund (fnamn,enamn,adress,telefonnummer,email,pass,postnummer,postort)
		VALUES ('$fnamn','$enamn','$adress','$telefonnummer','$email','$password','$postnummer','$postort')";
	
		// Kör frågan
		if($mysqli = connect_db()) {
 	
		$mysqli->query($sql);
		print_r($mysqli->error);
		}
		// Skriv ut meddelande och länk tillbaka till startsidan
		echo "<aside>You have created an account<br />";
		echo "<a href='index.php'>Back to start page</a><aside>";
	}

	// Om användare INTE klickat på spara-knapp
	else{

	
		//Koden nedanför skriver ut formulär för att registrera sig på hemsidan. 
		?>
		
		<!-- Ett formulär med samtliga kolumner på den aktuella raden -->
		<!--  PersonId skickas med i querystring, detta görs i formulärets action-attribut -->
		<!-- I varje cell skrivs en kolumn ut, detta med hjälp av variabeln $myRow (arrayen som resultatet av SQL-frågan sparats i) -->
		
		<section>
    <div id="signup">
        
    <h2>Sign up</h2>
        
    <form action="sign_up.php" method="post">
    <p><label for="fnamn">First name: </label>
    <br>
    <input type="text" id="fnamn" name="fnamn" size="30" /></p>
    <p><label for="enamn">Last name: </label>
    <br>
    <input type="text" id="enamn" name="enamn" size="30" /></p>
      
	 <p><label for="adress">Adress: </label>
    <br>
    <input type="text" id="adress" name="adress" size="30" /></p>
	
	 <p><label for="telefonnummer">Phonenumber: </label>
    <br>
    <input type="text" id="telefonnummer" name="telefonnummer" size="30" /></p>
	
    <p><label for="email">E-mail: </label>
    <br>
    <input type="text" id="email" name="email" size="30" /></p>
	
	  <p><label for="password">Password: </label>
    <br>
    <input type="password" id="password" name="password" size="30" /></p>
    
    <p><label for="postnummer">Postcode: </label>
    <br>
    <input type="text" id="postnummer" name="postnummer" size="30" /></p>
    <p><label for="stad">City: </label>
    <br>
    <input type="text" id="postort" name="postort" size="30" /></p>
        
    
    <p><input type="submit" id="signup" name="signup" value="Sign up" /></p>
    </form>
        
    </div>
</section>
		<?php
	}
	?>
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
        <a href="log_in.php">Log in</a>
    <br>
        <a href="sign_up.php">Sign up</a>
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