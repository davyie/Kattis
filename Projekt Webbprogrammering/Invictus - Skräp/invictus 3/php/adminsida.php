<?php

include_once "db_connect.php";
include_once "header_footer_mall.php";
include_once "data.php";//Denna är rätt. 
require_once "products.php";
include_once "summering.php";


error_reporting(0);

session_start();

$logged_in = (isset($_SESSION['login']) && $_SESSION['login'] != '');

	if($logged_in) {
		if(isset($_SESSION['access']) && $_SESSION['access'] == 'admin') {
			echo header_admin();
            echo section_admin();
            echo footer_admin();
            
		} else {
			header ("Location: login.php");
		}
	} else {
			header ("Location: index.php");
	}

function header_admin()  {
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Invictus</title>
    <link rel="stylesheet" href="../css/admin.css"/>
    <link rel="stylesheet" href="../css/header.css"/>
    <link rel="stylesheet" href="../css/footer.css"/>
</head>
    
<body>
    
<header>
    
    <!--aside>
        <a href="log_in.html">Log in</a>
        <a href="sign_up.html">Sign up</a>
    </aside-->
    <div>
    <a href="index.html" ><img src="../images/logo.png"/></a>
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
    <li class="huvudmeny"><a class="aktiv" href="adminsida.php">My Account</a>
        <ul class="global">
            <li class="submeny"><a href="logout.php">Log out</a></li>
            <li class="submeny"><a href="insert_product.php">Insert product</a></li>
        </ul>
            </li>
    </ul>
</nav>
    
</header>';
}
function section_admin(){
return '    
    <section>
    <aside>
        <a href="insert_product.php"><h1>Insert product</h1></a>
    </aside>
        
    <aside>
        <a href="visarapport.php"><h1>Rapport</h1></a>
    </aside>    
        
    <aside>
        <a href="visasummering.php"><h1>Summary</h1></a>
    </aside>
</section>';
}
function footer_admin(){
return '    
    
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
</html>';
}

?>
