<?php
/*
Grupp 5 - Invictus Watches 
Management med IT
Webbprogrammeringens grunder
Södetörns Högskola 
2016-01-08
*/
//Denna kod skickar formuläret till vår email. 
include_once"header_footer_mall.php";

function header_contact(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Contact_us</title>
    <link rel="stylesheet" href="../css/contact_us.css"/>
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
    <li class="huvudmeny"><a class="aktiv" href="contact_us.php">Contact us</a>       </li>
     <li class="huvudmeny"><a href="testlog.php">Account</a>
         <ul class="drop">
            <li class="submeny"><a href="log_in.php">Log in</a></li>
            <li class="submeny"><a href="sign_up.php">Sign up</a</li>
        </ul>
            
		</ul>
</nav>
        
</header>';
}
function header_contact_login(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Contact_us</title>
    <link rel="stylesheet" href="../css/contact_us.css"/>
    <link rel="stylesheet" href="../css/header.css"/>
    <link rel="stylesheet" href="../css/footer.css"/>
	<link rel="shortcut icon" href="images/favicon.jpg" />
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
    <li class="huvudmeny"><a class="aktiv" href="contact_us.php">Contact us</a>       </li>
     <li class="huvudmeny"><a href="usersida.php">My Account</a>
         <ul class="drop">
            <li class="submeny"><a href="logout.php">Log out</a></li>
        </ul>
            </li>
                         
		</ul>
</nav>
        
</header>';
}
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


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'To: '.ucwords($realname) . "\r\n";
$headers .= 'From: '.ucwords($to) . "\r\n";

if($email != "noaddress"){
	if(mail($to, $subject, $message, $headers)){
		 echo nl2br("<div id='fraga'><h3>Your message has been sent</h3>
		 <strong>Receiver:</strong> $to<br> 
		 $message</div>");
	}else{
		"Your message wasn't sent";
	}
} else {
	echo "You must write an e-mail";
}

function footer_contact(){
return '<footer>
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
        <a href="../php/log_in.php">Log in</a>
    <br>
        <a href="../php/sign_up.php">Sign up</a>
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

</html>';
}

session_start();

error_reporting(E_ALL);

if (isset($_SESSION['access']) && $_SESSION['access'] == 'admin') {
	
    echo header_contact_admin();
    echo section_contact();
    echo mall_footer_login();
}
	ELSEif (isset($_SESSION['login']) && $_SESSION['login'] = 'customer') {
	//http://www.php.net/manual/en/book.session.php
    

		echo header_contact_login();
        echo mall_footer_login();
} 	else {

        echo header_contact();
        echo footer_contact();
	
}

?>
