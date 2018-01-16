<?php
	
include_once "db_connect.php";

	
	?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>insert product</title>	
        <link rel="stylesheet" href="../css/sign_up.css"/>
        <link rel="stylesheet" href="../css/header.css"/>
        <link rel="stylesheet" href="../css/footer.css"/>
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
     <li class="huvudmeny"><a href="adminsida.php">My Account</a>
         <ul class="global">
          <li class="submeny"><a href="logout.php">Log out</a></li>
             <li class="submeny"><a href="insert_product.php">Insert product</a></li>
        </ul>
            </li>
	</ul>
</nav>
        
</header>
	<?php
	


	// Lägger till en tillbakaknapp tex	

	// vad som händer om "spara" är iklickad
	if(isset($_POST['save'])){
	
		// Hämtar värderna från formuläret
		
		
		$namn = $_POST['namn'];
		$Type = $_POST['Type'];
		$beskrivning = $_POST['beskrivning'];	
		$price = $_POST['price'];			
		$Produktnummer = $_POST['Produktnummer'];
		$Produktbild = $_POST['Produktbild'];	
		$Lagersaldo = $_POST['Lagersaldo'];	
		$size = $_POST['size'];
		$width = $_POST['width'];
	
		// SQL-fråga (INSERT) 
		$sql = "INSERT INTO produkt (namn,Type,beskrivning,price,Produktnummer,Produktbild,Lagersaldo,size,width) 
		VALUES ('$namn','$Type','$beskrivning','$price','$Produktnummer','$Produktbild','$Lagersaldo','$size','$width')";
	
		// Kör frågan
		if($mysqli = connect_db()) {
 	
		$mysqli->query($sql);
		print_r($mysqli->error);
		}
		
		
	
		// Visar att personen är inlagd och ger en länk till startsidan
		echo "Produkten är nu inlagd i databasen<br />";
		echo "<a href='index.php'>Tillbaka till listningssidan</a>";
	}

	// Vad som händer om användare INTE klickar på spara-knapp
	else{

		
		
		?>
		
		<!-- Ett formulär med samtliga kolumner på den aktuella raden -->
		<!--  PersonId skickas med i querystring, detta görs i formulärets action-attribut -->
		<!-- I varje cell skrivs en kolumn ut, detta med hjälp av variabeln $myRow (arrayen som resultatet av SQL-frågan sparats i) -->
<section>
<div id="insert">
<h2>Insert a new product</h2>
<form action="insert_product.php" method="post">		
<p><label for="produktnamn">Productname: </label>
<br>
<input type="text" id="namn" name="namn" size="30" /></p>
<p><label for="type">Type: </label>                     
<br>
<input type="text" id="Type" name="Type" size="30" /></p>           
<p><label for="description">Description: </label>
<br>
<input type="text" id="beskrivning" name="beskrivning" size="30" /></p>          
<p><label for="case">Case size: </label>  
<br>
<input type="text" id="size" name="size" size="30" /></p>
<p><label for="strap">Strap width: </label>      
<br>
<input type="text" id="width" name="width" size="30" /></p>
<p><label for="price">Price: </label>     
<br>
<input type="text" id="price" name="price" size="30" /></p>            
<p><label for="productnumber">Productnumber: </label>                  <br>
<input type="text" id="Produktnummer" name="Produktnummer" size="30" /></p>       
<p><label for="stock">Stock: </label>   
<br>
<input type="text" id="Lagersaldo" name="Lagersaldo" size="30" /></p>
<p><label for="produktbild">Product picture: </label>                  <br>
<input type="text" id="Produktbild" name="Produktbild" size="30" /></p>            
<p><input type="submit" id="save" name="save" value="Save" /></p>
                
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