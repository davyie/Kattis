

<?php
/*
Grupp 5 - Invictus Watches 
Management med IT
Webbprogrammeringens grunder
Södetörns Högskola 
2016-01-08
*/
//tanken med denna fil är att den ska vara på account sidan så användarna kan ändra sina egna uppgifter. Används dock inte på hemsidan för tillfället
	
include_once "db_connect.php";

	
	?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Invictus</title>	
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
<?php


// Koden tagen ifrån http://stackoverflow.com/questions/18344533/how-to-allow-users-logged-in-to-update-edit-their-profile-settings-information


if(isset($_POST['spara']))
	{
    $err = array();
    if(!$_POST['password1'] || !$_POST['passwordnew1'])
        $err[] = 'All the fields must be filled in!';
    if(!count($err))
    {
        $_POST['password1'] = mysql_real_escape_string($_POST['password1']);
        $_POST['passwordnew1'] = mysql_real_escape_string($_POST['passwordnew1']);
        $row = mysql_fetch_assoc(mysql_query("SELECT kundid,email FROM kund WHERE email='{$_SESSION['email']}' AND pass='".md5($_POST['password1'])."'"));
        if($row['email'])
    {
        $querynewpass = "UPDATE kund SET pass='".md5($_POST['passwordnew1'])."' WHERE email='{$_SESSION['email']}'";
        $result = mysql_query($querynewpass) or die(mysql_error());
        $_SESSION['msg']['passwordchange-success']='* You have successfully changed your password!';
    }
        else $err[]='Wrong password to start with!';
    }
    if($err)
    $_SESSION['msg']['passwordchange-err'] = implode('<br />',$err);
    header("Location: up_person.php?id=" . $_SESSION['email']);
    exit;
}
	
		/*// Hämta in värden från formulär med hjälp av POST
		$kundid = $_POST['kundid'];
		$fnamn = $_POST['fnamn'];
		$enamn = $_POST['enamn'];
		$email = $_POST['email'];	
		$adress = $_POST['adress'];
		$postnummer = $_POST['postnummer'];	
		$postort = $_POST['postort'];	
		$telefonnummer = $_POST['telefonnummer'];		
		$pass = $_POST['pass'];		
	
		// SQL-fråga (UPDATE) 
		$sql = "UPDATE kund SET kundid='$kundid',fnamn='$fnamn', enamn='$enamn', email='$email', adress='$adress', postnummer='$postnummer', postort='$postort',
		telefonnummer='$telefonnummer', pass='$pass' WHERE PersonId=$PersonId";
	
		// Kör frågan
		if($mysqli = connect_db()) {
 	
		$mysqli->query($sql);
		print_r($mysqli->error);
		}
		
		
	
		// Skriv ut meddelande och länk tillbaka till startsidan
		echo "Your account is now uppdated<br />";
		echo "<a href='index.php'>Tillbaka till listningssidan</a>";
	}

	// Om användare INTE klickat på spara-knapp
	else{

		
		
		// Kör frågan och spara i en array
		if($mysqli = connect_db()) {
 	// Hämta in PersonId från querystring
		$kundid = $_GET['kundid'];
	
		// Definiera SQL
		$sql = "SELECT * FROM kund WHERE kundid=$kundid";
		$result = $mysqli->query($sql);
		print_r($mysqli->error);
		}
		$myRow = $result->fetch_array();*/

		
?>

<form action="" method="post"> 
    <label class="grey" for="password1">Current Password:</label>
    <input class="field" type="password" name="password1" id="password1" value="" size="23" />
    <label class="grey" for="pass">New Password:</label>
    <input class="field" type="password" name="passwordnew1" id="passwordnew1" size="23" />
    <input type="submit" name="spara" value="submit" class="bt_register" style="margin-left: 382px;" />
      <div class="clear"></div>
    <?php
    if($_SESSION['msg']['passwordchange-err'])
    {
        echo '<div class="err">'.$_SESSION['msg']['passwordchange-err'].'</div>';
        unset($_SESSION['msg']['passwordchange-err']);
    }
    if($_SESSION['msg']['passwordchange-success'])
    {
        echo '<div class="success">'.$_SESSION['msg']['passwordchange-success'].'</div>';
        unset($_SESSION['msg']['passwordchange-success']);
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