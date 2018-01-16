<?php 
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
     <li class="huvudmeny"><a href="log_in.php">My Account</a>
         <ul class="global">
            <li class="submeny"><a href="log_in.php">Log in</a></li>
            <li class="submeny"><a href="sign_up.php">Sign up</a</li>
        </ul>
            </li>
                         <li class="huvudmeny"><a href="../php/kassa.php"><img src="../images/kundkorg_ikon.png"/>('.count($_SESSION['kundkorg']).')</a></li>
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
    <link rel="stylesheet" href="css/contact_us.css"/>
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
	<link rel="shortcut icon" href="images/favicon.jpg" />
</head>
    
<body>
    
<header>
    
<div>
 <a href="../php/index.php" ><img src="../images/logo.png"/></a>
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
         <ul class="global">
            <li class="submeny"><a href="logout.php">Log out</a></li>
        </ul>
            </li>
                         <li class="huvudmeny"><a href="../php/kassa.php"><img src="../images/kundkorg_ikon.png"/>('.count($_SESSION['kundkorg']).')</a></li>
		</ul>
</nav>
        
</header>';
}
function header_contact_admin(){
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
 <a href="../php/index.php" ><img src="../images/logo.png"/></a>
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
     <li class="huvudmeny"><a href="adminsida.php">My Account</a>
         <ul class="global">
         <li class="submeny"><a href="logout.php">Log out</a></li>
            <li class="submeny"><a href="insert_product.php">Insert product</a></li>
        </ul>
            </li>
                         
		</ul>
</nav>
        
</header>';
}
function section_contact(){
return '<section>
    <div id="mail">
        
    <h2>E-mail</h2>
        
    <form action="../php/send_formular.php" method="post">
    <p><label for="fornamn">First name: </label>
    <br>
    <input type="text" id="fornamn" name="fornamn" size="30" /></p>
    <p><label for="fornamn">Last name: </label>
    <br>
    <input type="text" id="efternamn" name="efternamn" size="30" /></p>
    <p><label for="email">E-mail: </label>
    <br>
    <input type="text" id="message" name="email" size="30" /></p>
    
    <p><label for="subject">Subject: </label>
    <br>
    <input type="text" id="subject" name="subject" size="30" /></p>
    
    <p><label for="message">Message: </label>
    <br>
    <textarea id="message" name="message" ></textarea></p> 
    <p><input type="submit" id="send" name="send" value="Send" /></p>
    </form>
        
    </div>

    <div>
    <h1>or</h1>
    </div>
    
    <div id="nr">
    <h2>Call</h2>
        <a href="tel:+46 589-861-00">+46 589-861-00</a>
    </div>
</section>';
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
        echo section_contact();
        echo mall_footer_login();
} 	else {

        echo header_contact();
        echo section_contact();
        echo footer_contact();
	
}

?>

    

    
