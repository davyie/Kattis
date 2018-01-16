<?php
/*
Kom ihåg att alltid include_once denna sida. Det är mall för header och footer. 
CSS är lite konstig. Måste fixa till. 
*/
//Header delen av webbsidan. 

//Lägger in siffra. ('.count($_SESSION['kundkorg']).') Lägg in i html. 



function index_header(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Invictus</title>
    <link rel="stylesheet" href="../css/index.css"/>
    <link rel="stylesheet" href="../css/header.css"/>
    <link rel="stylesheet" href="../css/footer.css"/>
	<link rel="shortcut icon" href="../images/favicon.jpg" />

</head>
    
<body>
    
<header>
    
    <!--aside>
        <a href="log_in.html">Log in</a>
        <a href="sign_up.html">Sign up</a>
    </aside-->
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
    <li class="huvudmeny"><a href="contact_us.php">Contact us</a></li>
    <li class="huvudmeny"><a href="testlog.php">Account</a>
        <ul class="global">
            <li class="submeny"><a href="log_in.php">Log in</a></li>
            <li class="submeny"><a href="sign_up.php">Sign up</a</li>
        </ul>
            </li>
                        <li class="huvudmeny"><a href="kassa.php"><img src="../images/kundkorg_ikon.png"/> ('.count($_SESSION['kundkorg']).')</a></li>
            </li>
    </ul>
</nav>
    <!--testa med dropdown menu
    
    <div class="mobile-nav">
     <div class="menu-btn" id="menu-btn">
	<div></div>
	<span></span>
	<span></span>
	<span></span>
     </div>

     <div class="responsive-menu">
        <ul>
            <li><a class="aktiv" href="index.html">Invictus</a></li>
            <li><a href="watches.html">Watches</a></li>
            <li><a href="our_story.html">Our story</a></li>
            <li><a href="social_media.html">Social media</a></li>
            <li><a href="contact_us.html">Contact us</a></li>
            <li><a href="shopping_cart.php">Shopping cart</a></li>
        </ul>
     </div>
    </div-->
    
</header>';
}
function index_header_login(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Invictus</title>
    <link rel="stylesheet" href="../css/index.css"/>
    <link rel="stylesheet" href="../css/header.css"/>
    <link rel="stylesheet" href="../css/footer.css"/>
	<link rel="shortcut icon" href="../images/favicon.jpg" />

</head>
    
<body>
    
<header>
    
    <!--aside>
        <a href="log_in.html">Log in</a>
        <a href="sign_up.html">Sign up</a>
    </aside-->
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
    <li class="huvudmeny"><a href="contact_us.php">Contact us</a></li>
    <li class="huvudmeny"><a href="usersida.php">My Account</a>
        <ul class="global">
            <li class="submeny"><a href="logout.php">Log out</a></li>

        </ul>
            <li class="huvudmeny"><a href="kassa.php"><img src="../images/kundkorg_ikon.png"/> ('.count($_SESSION['kundkorg']).')</a></li>
    </ul>
</nav>
    
</header>';
}
// admin
function header_login_Admin(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Invictus</title>
    <link rel="stylesheet" href="../css/rapportstyle.css"/>
    <link rel="stylesheet" href="../css/index.css"/>
    <link rel="stylesheet" href="../css/header.css"/>
    <link rel="stylesheet" href="../css/footer.css"/>
	<link rel="shortcut icon" href="../images/favicon.jpg" />

</head>
    
<body>
    
<header>
    
    <!--aside>
        <a href="log_in.html">Log in</a>
        <a href="sign_up.html">Sign up</a>
    </aside-->
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
           
    </ul>
</nav>
    
</header>';
}

function kassa_header(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Invictus</title>
    <link rel="stylesheet" href="../css/index.css"/>
    <link rel="stylesheet" href="../css/shopping_cart.css"/>
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
     <li class="huvudmeny"><a href="testlog.php">Account</a>
        <ul class="global">
            <li class="submeny"><a href="log_in.php">Log in</a></li>
            <li class="submeny"><a href="sign_up.php">Sign up</a</li>
        </ul>
            </li>
            <li class="huvudmeny"><a href="kassa.php"><img src="../images/kundkorg_ikon.png"/>('.count($_SESSION['kundkorg']).')</a></li>
            </li>
    </ul>
</nav>
        
</header>';
}
function kassa_header_login(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Invictus</title>
    <link rel="stylesheet" href="../css/index.css"/>
    <link rel="stylesheet" href="../css/shopping_cart.css"/>
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
     <li class="huvudmeny"><a href="usersida.php">My Account</a>
        <ul class="global">
            <li class="submeny"><a href="logout.php">Log out</a></li>
        </ul>
            </li>
            <li class="huvudmeny"><a href="kassa.php"><img src="../images/kundkorg_ikon.png"/>('.count($_SESSION['kundkorg']).')</a></li>
            </li>
    </ul>
</nav>
        
</header>';
}


function login_header(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Log in</title>
    <link rel="stylesheet" href="../css/log_in.css"/>
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
       <ul class="global">
            <li class="submeny"><a href="log_in.php">Log in</a></li>
            <li class="submeny"><a href="sign_up.php">Sign up</a</li>
                   </ul>
            </li>
                        <li class="huvudmeny"><a href="kassa.php"><img src="../images/kundkorg_ikon.png"/>('.count($_SESSION['kundkorg']).')</a></li>
            </li>
    </ul>
    </ul>
</nav>
        
</header>';
}
function ourstory_header(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Our story</title>
    <link rel="stylesheet" href="../css/our_story.css"/>
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
    <li class="huvudmeny"><a class="aktiv" href="our_story.php">Our story</a>         </li>
    <li class="huvudmeny"><a href="social_media.php">Social media</a></li>
    <li class="huvudmeny"><a href="contact_us.php">Contact us</a>       </li>
     <li class="huvudmeny"><a href="testlog.php">Account</a>
        <ul class="global">
            <li class="submeny"><a href="log_in.php">Log in</a></li>
            <li class="submeny"><a href="sign_up.php">Sign up</a</li>
        </ul>
            </li>
            <li class="huvudmeny"><a href="kassa.php"><img src="../images/kundkorg_ikon.png"/> ('.count($_SESSION['kundkorg']).')</a></li>
    </ul>
</nav>
        
</header>';
}

function ourstory_header_login(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Our story</title>
    <link rel="stylesheet" href="../css/our_story.css"/>
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
    <li class="huvudmeny"><a class="aktiv" href="our_story.php">Our story</a>         </li>
    <li class="huvudmeny"><a href="social_media.php">Social media</a></li>
    <li class="huvudmeny"><a href="contact_us.php">Contact us</a>       </li>
     <li class="huvudmeny"><a href="usersida.php">My Account</a>
        <ul class="global">
            <li class="submeny"><a href="logout.php">Log out</a></li>
        </ul>
            </li>
            <li class="huvudmeny"><a href="kassa.php"><img src="../images/kundkorg_ikon.png"/> ('.count($_SESSION['kundkorg']).')</a></li>
    </ul>
</nav>
        
</header>';
}
function ourstory_header_login_admin(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Our story</title>
    <link rel="stylesheet" href="../css/our_story.css"/>
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
    <li class="huvudmeny"><a class="aktiv" href="our_story.php">Our story</a>         </li>
    <li class="huvudmeny"><a href="social_media.php">Social media</a></li> 
     <li class="huvudmeny"><a href="adminsida.php">My Account</a>
        <ul class="global">
        <li class="submeny"><a href="logout.php">Log out</a></li>
			<li class="submeny"><a href="insert_product.php">Insert product</a></li>
        </ul>
            
    </ul>
</nav>
        
</header>';
}

function socialmedier_header(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Log in</title>
    <link rel="stylesheet" href="../css/social_media.css"/>
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
    <li class="huvudmeny"><a class="aktiv" href="social_media.php">Social media</a></li>
    <li class="huvudmeny"><a href="contact_us.php">Contact us</a>       </li>
    <li class="huvudmeny"><a href="testlog.php">Account</a>
        <ul class="global">
            <li class="submeny"><a href="log_in.php">Log in</a></li>
            <li class="submeny"><a href="sign_up.php">Sign up</a</li>
        </ul>
            </li>
            <li class="huvudmeny"><a href="kassa.php"><img src="../images/kundkorg_ikon.png"/> ('.count($_SESSION['kundkorg']).')</a></li>
    </ul>
</nav>
        
</header>';
}
function socialmedier_header_login(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Log in</title>
    <link rel="stylesheet" href="../css/social_media.css"/>
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
    <li class="huvudmeny"><a class="aktiv" href="social_media.php">Social media</a></li>
    <li class="huvudmeny"><a href="contact_us.php">Contact us</a>       </li>
    <li class="huvudmeny"><a href="usersida.php">My Account</a>
        <ul class="global">
            <li class="submeny"><a href="logout.php">Log out</a></li>
        </ul>
            </li>
            <li class="huvudmeny"><a href="kassa.php"><img src="../images/kundkorg_ikon.png"/> ('.count($_SESSION['kundkorg']).')</a></li>
    </ul>
</nav>
        
</header>';
}
function socialmedier_header_login_admin(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Log in</title>
    <link rel="stylesheet" href="../css/social_media.css"/>
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
    <li class="huvudmeny"><a class="aktiv" href="social_media.php">Social media</a></li>
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

function account(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Log in</title>
    <link rel="stylesheet" href="../css/log_in.css"/>
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
    <li class="huvudmeny"><a href="../html/contact_us.html">Contact us</a>       </li>
     <li class="huvudmeny"><a href="testlog.php">Account</a>
       <ul class="global">
            <li class="submeny"><a href="log_in.php">Log in</a></li>
            <li class="submeny"><a href="sign_up.php">Sign up</a</li>
          
            </li>
           
    </ul>
</nav>
        
</header>';
}
//Klockor 
function watches_header(){
return '<!doctype>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <title>Watches</title>
    <link rel="stylesheet" href="../css/watches.css"/>
    <link rel="stylesheet" href="../css/header.css"/>
    <link rel="stylesheet" href="../css/footer.css"/>
	<link rel="shortcut icon" href="../images/favicon.jpg" />
    
    <!--Test script-->
    <script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
    <script>
 jQuery(function($){
     $( ".menu-btn" ).click(function(){
     $(".responsive-menu").addClass("expand")
     $(".menu-btn").addClass("btn-none")
     })
     
     $( ".close-btn" ).click(function(){
     $(".responsive-menu").removeClass("expand")
     $(".menu-btn").removeClass("btn-none")
     })
   })
 </script>
    <style type="text/css">
        .rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin-top: -5%;
  }

.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
  }

.rslides li:first-child {
  position: relative;
  display: block;
  float: left;
  }

.rslides img {
  display: block;
  height: auto;
  float: left;
  width: 100%;
  border: 0;
  }

        </style>
    </head>
    <body>
    <header>
    
<div>
     <a href="index.php" ><img src="../images/logo.png"/></a>
    </div>
    
    <nav id="navigation" class="global-navigation" role="navigation">
    <ul class="global">
        <li class="huvudmeny"><a class="aktiv" href="watches.php">Watches</a>
        <ul class="drop">
        <li class="submeny"><a href="classic.php">Classic Watches</a></li>
        <li class="submeny"><a href="exclusive.php">Exclusive Watches</a</li>
        <li class="submeny"><a href="sport.php">Sport Watches</a>           </li>
        </ul>
        </li>
    <li class="huvudmeny"><a href="our_story.php">Our story</a>         </li>
    <li class="huvudmeny"><a href="social_media.php">Social media</a></li>
    <li class="huvudmeny"><a href="contact_us.php">Contact us</a>       </li>
     <li class="huvudmeny"><a href="testlog.php">Account</a>
         <ul class="global">
            <li class="submeny"><a href="log_in.php">Log in</a></li>
            <li class="submeny"><a href="sign_up.php">Sign up</a</li>
                
        </ul>
                        <li class="huvudmeny"><a href="kassa.php"><img src="../images/kundkorg_ikon.png"/> ('.count($_SESSION['kundkorg']).')</a></li>
	</ul>
</nav>
        
</header>';
}
function watches_header_login(){
return '<!doctype>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <title>Watches</title>
    <link rel="stylesheet" href="../css/watches.css"/>
    <link rel="stylesheet" href="../css/header.css"/>
    <link rel="stylesheet" href="../css/footer.css"/>
	<link rel="shortcut icon" href="../images/favicon.jpg" />
    
    <!--Test script-->
    <script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
    <script>
 jQuery(function($){
     $( ".menu-btn" ).click(function(){
     $(".responsive-menu").addClass("expand")
     $(".menu-btn").addClass("btn-none")
     })
     
     $( ".close-btn" ).click(function(){
     $(".responsive-menu").removeClass("expand")
     $(".menu-btn").removeClass("btn-none")
     })
   })
 </script>
    <style type="text/css">
        .rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin-top: -5%;
  }

.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
  }

.rslides li:first-child {
  position: relative;
  display: block;
  float: left;
  }

.rslides img {
  display: block;
  height: auto;
  float: left;
  width: 100%;
  border: 0;
  }

        </style>
    </head>
    <body>
    <header>
    
<div>
     <a href="index.php" ><img src="../images/logo.png"/></a>
    </div>
    
    <nav id="navigation" class="global-navigation" role="navigation">
    <ul class="global">
        <li class="huvudmeny"><a class="aktiv" href="watches.php">Watches</a>
        <ul class="drop">
        <li class="submeny"><a href="classic.php">Classic Watches</a></li>
        <li class="submeny"><a href="exclusive.php">Exclusive Watches</a</li>
        <li class="submeny"><a href="sport.php">Sport Watches</a>           </li>
        </ul>
        </li>
    <li class="huvudmeny"><a href="our_story.php">Our story</a>         </li>
    <li class="huvudmeny"><a href="social_media.php">Social media</a></li>
    <li class="huvudmeny"><a href="contact_us.php">Contact us</a>       </li>
     <li class="huvudmeny"><a href="usersida.php">My Account</a>
         <ul class="global">
            <li class="submeny"><a href="logout.php">Log out</a></li>
 </ul>
            </li>
            <li class="huvudmeny"><a href="kassa.php"><img src="../images/kundkorg_ikon.png"/> ('.count($_SESSION['kundkorg']).')</a></li>
    </ul>
</nav>
        
</header>';
}
function watches_header_login_admin(){
return '<!doctype>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <title>Watches</title>
    <link rel="stylesheet" href="../css/watches.css"/>
    <link rel="stylesheet" href="../css/header.css"/>
    <link rel="stylesheet" href="../css/footer.css"/>
	<link rel="shortcut icon" href="../images/favicon.jpg" />
    
    <!--Test script-->
    <script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
    <script>
 jQuery(function($){
     $( ".menu-btn" ).click(function(){
     $(".responsive-menu").addClass("expand")
     $(".menu-btn").addClass("btn-none")
     })
     
     $( ".close-btn" ).click(function(){
     $(".responsive-menu").removeClass("expand")
     $(".menu-btn").removeClass("btn-none")
     })
   })
 </script>
    <style type="text/css">
        .rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin-top: -5%;
  }

.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
  }

.rslides li:first-child {
  position: relative;
  display: block;
  float: left;
  }

.rslides img {
  display: block;
  height: auto;
  float: left;
  width: 100%;
  border: 0;
  }

        </style>
    </head>
    <body>
    <header>
    
<div>
     <a href="index.php" ><img src="../images/logo.png"/></a>
    </div>
    
    <nav id="navigation" class="global-navigation" role="navigation">
    <ul class="global">
        <li class="huvudmeny"><a class="aktiv" href="watches.php">Watches</a>
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
        
</header>';
}

function classic_header(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Classic Watches</title>
    <link rel="stylesheet" href="../css/classic.css"/>
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
        <li class="huvudmeny"><a class="aktiv" href="watches.php">Watches</a>
        <ul class="drop">
        <li class="submeny"><a href="classic.php">Classic Watches</a></li>
        <li class="submeny"><a href="exclusive.php">Exclusive Watches</a</li>
        <li class="submeny"><a href="sport.php">Sport Watches</a>           </li>
        </ul>
        </li>
    <li class="huvudmeny"><a href="our_story.php">Our story</a>         </li>
    <li class="huvudmeny"><a href="social_media.php">Social media</a></li>
    <li class="huvudmeny"><a href="contact_us.php">Contact us</a>       </li>
     <li class="huvudmeny"><a href="testlog.php">Account</a>
        <ul class="global">
            <li class="submeny"><a href="log_in.php">Log in</a></li>
            <li class="submeny"><a href="sign_up.php">Sign up</a</li>
        </ul>
            </li>
            <li class="huvudmeny"><a href="kassa.php"><img src="../images/kundkorg_ikon.png"/> ('.count($_SESSION['kundkorg']).')</a></li>
    </ul>
</nav>
        
</header>';
}
function classic_header_login(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Classic Watches</title>
    <link rel="stylesheet" href="../css/classic.css"/>
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
        <li class="huvudmeny"><a class="aktiv" href="watches.php">Watches</a>
        <ul class="drop">
        <li class="submeny"><a href="classic.php">Classic Watches</a></li>
        <li class="submeny"><a href="exclusive.php">Exclusive Watches</a</li>
        <li class="submeny"><a href="sport.php">Sport Watches</a>           </li>
        </ul>
        </li>
    <li class="huvudmeny"><a href="our_story.php">Our story</a>         </li>
    <li class="huvudmeny"><a href="social_media.php">Social media</a></li>
    <li class="huvudmeny"><a href="contact_us.php">Contact us</a>       </li>
     <li class="huvudmeny"><a href="usersida.php">My Account</a>
        <ul class="global">
            <li class="submeny"><a href="logout.php">Log out</a></li>
        </ul>
            </li>
            <li class="huvudmeny"><a href="kassa.php"><img src="../images/kundkorg_ikon.png"/> ('.count($_SESSION['kundkorg']).')</a></li>
    </ul>
</nav>
        
</header>';
}
function classic_header_login_admin(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Classic Watches</title>
    <link rel="stylesheet" href="../css/classic.css"/>
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
        <li class="huvudmeny"><a class="aktiv" href="watches.php">Watches</a>
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
        
</header>';
}

function exclusive_header(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Exclusive Watches</title>
    <link rel="stylesheet" href="../css/exclusive.css"/>
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
        <li class="huvudmeny"><a class="aktiv" href="watches.php">Watches</a>
        <ul class="drop">
        <li class="submeny"><a href="classic.php">Classic Watches</a></li>
        <li class="submeny"><a href="exclusive.php">Exclusive Watches</a</li>
        <li class="submeny"><a href="sport.php">Sport Watches</a>           </li>
        </ul>
        </li>
    <li class="huvudmeny"><a href="our_story.php">Our story</a>         </li>
    <li class="huvudmeny"><a href="social_media.php">Social media</a></li>
    <li class="huvudmeny"><a href="contact_us.php">Contact us</a>       </li>
     <li class="huvudmeny"><a href="testlog.php">Account</a>
        <ul class="global">
            <li class="submeny"><a href="log_in.php">Log in</a></li>
            <li class="submeny"><a href="sign_up.php">Sign up</a</li>
        </ul>
            </li>
            <li class="huvudmeny"><a href="kassa.php"><img src="../images/kundkorg_ikon.png"/> ('.count($_SESSION['kundkorg']).')</a></li>
    </ul>
</nav>
        
</header>';
}
function exclusive_header_login(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Exclusive Watches</title>
    <link rel="stylesheet" href="../css/exclusive.css"/>
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
        <li class="huvudmeny"><a class="aktiv" href="watches.php">Watches</a>
        <ul class="drop">
        <li class="submeny"><a href="classic.php">Classic Watches</a></li>
        <li class="submeny"><a href="exclusive.php">Exclusive Watches</a</li>
        <li class="submeny"><a href="sport.php">Sport Watches</a>           </li>
        </ul>
        </li>
    <li class="huvudmeny"><a href="our_story.php">Our story</a>         </li>
    <li class="huvudmeny"><a href="social_media.php">Social media</a></li>
    <li class="huvudmeny"><a href="contact_us.php">Contact us</a>       </li>
     <li class="huvudmeny"><a href="usersida.php">My Account</a>
        <ul class="global">
            <li class="submeny"><a href="logout.php">Log out</a></li>
        </ul>
            </li>
            <li class="huvudmeny"><a href="kassa.php"><img src="../images/kundkorg_ikon.png"/> ('.count($_SESSION['kundkorg']).')</a></li>
    </ul>
</nav>
        
</header>';
}
function exclusive_header_login_admin(){
return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Exclusive Watches</title>
    <link rel="stylesheet" href="../css/exclusive.css"/>
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
        <li class="huvudmeny"><a class="aktiv" href="watches.php">Watches</a>
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
        
</header>';
}



function sport_header(){
    return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Sport Watches</title>
    <link rel="stylesheet" href="../css/sport.css"/>
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
        <li class="huvudmeny"><a class="aktiv" href="watches.php">Watches</a>
        <ul class="drop">
        <li class="submeny"><a href="classic.php">Classic Watches</a></li>
        <li class="submeny"><a href="exclusive.php">Exclusive Watches</a</li>
        <li class="submeny"><a href="sport.php">Sport Watches</a>           </li>
        </ul>
        </li>
    <li class="huvudmeny"><a href="our_story.php">Our story</a>         </li>
    <li class="huvudmeny"><a href="social_media.php">Social media</a></li>
    <li class="huvudmeny"><a href="contact_us.php">Contact us</a>       </li>
<li class="huvudmeny"><a href="testlog.php">Account</a>
        <ul class="global">
            <li class="submeny"><a href="log_in.php">Log in</a></li>
            <li class="submeny"><a href="sign_up.php">Sign up</a</li>
        </ul>
            </li>
            <li class="huvudmeny"><a href="kassa.php"><img src="../images/kundkorg_ikon.png"/> ('.count($_SESSION['kundkorg']).')</a></li>
    </ul>
</nav>
        
</header>';
}
function sport_header_login(){
    return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Sport Watches</title>
    <link rel="stylesheet" href="../css/sport.css"/>
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
        <li class="huvudmeny"><a class="aktiv" href="watches.php">Watches</a>
        <ul class="drop">
        <li class="submeny"><a href="classic.php">Classic Watches</a></li>
        <li class="submeny"><a href="exclusive.php">Exclusive Watches</a</li>
        <li class="submeny"><a href="sport.php">Sport Watches</a>           </li>
        </ul>
        </li>
    <li class="huvudmeny"><a href="our_story.php">Our story</a>         </li>
    <li class="huvudmeny"><a href="social_media.php">Social media</a></li>
    <li class="huvudmeny"><a href="contact_us.php">Contact us</a>       </li>
<li class="huvudmeny"><a href="usersida.php">My Account</a>
        <ul class="global">
            <li class="submeny"><a href="logout.php">Log out</a></li>
        </ul>
            </li>
            <li class="huvudmeny"><a href="kassa.php"><img src="../images/kundkorg_ikon.png"/> ('.count($_SESSION['kundkorg']).')</a></li>
    </ul>
</nav>
        
</header>';
}
function sport_header_login_admin(){
    return '<!doctype html>
<html lang="sv-se">
    
<head>
    <meta charset="utf-8" />
    <title>Sport Watches</title>
    <link rel="stylesheet" href="../css/sport.css"/>
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
        <li class="huvudmeny"><a class="aktiv" href="watches.php">Watches</a>
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
        
</header>';
}

//Section delar av webbsidor 
function section_index(){
return '
    <section>
    <h1>Welcome to Invictus Watches</h1>
    
    <p>Time is an interesting phenomenon, some people say time is absolute and some says it’s relative. We at Invictus don’t know what to believe but we do believe in quality, style and that in whatever way you choose to spend your time, you should look amazing in keeping track of it.</p>
    
    <p>A watch from Invictus is stylish, elegant and defines timepiece quality. Our handmade watches are put together by hand in Stockholm, Sweden. Only using true quality parts and put together by the best in the business. Invictus stylish design combined with elegant details gives you an accessory to trust and wear with confidence. 
</p>
    
    <p>In the creative process of designing our watches we strive for perfection and quality and let our Scandinavian minimalist design shine. Order your timepiece today and become part of the Invictus family. Learn more about us under ”<a href="our_story.php">Our Story</a>”.
     <br>
        <br>
    <img src="../images/invictus_startsida.jpg" style="width:900px">
    </p>
    </section>'; 
}

function section_login(){
return '<section>
    <div id="login">
        
    <h2>Log in</h2>
        
    <form action="log_in.php" method="post">
    <p><label for="email">E-mail: </label>
    <br>
    <input type="text" id="email" name="email" size="30" /></p>
    <p><label for="password">Password: </label>
    <br>
    <input type="password" id="password" name="password" size="30" /></p>
    <p><input type="submit" id="login" name="login" value="Log in" /></p>
    </form>
        
    </div>
</section>';
}

function section_socialmedier(){
return '<section>
    
    <h2>
    Follow and like us on social media
    <br>
    <br>
    <br>
    #invictuswatches
    </h2>
    
    <div id="instagram">
        <a href="https://www.instagram.com/invictuswatches/">
        <img src="../images/insta.png" alt="instagram"/>
        <h1>@invictuswatches</h1>
        </a>
    </div>
    
    <div id="twitter">
        <a href="https://twitter.com/InvictusWatches">
        <img src="../images/twitt.png" alt="instagram"/>
        <h1>@InvictusWatches</h1>
        </a>
    </div>
    
    <div id="facebook">
        <a href="https://www.facebook.com/invictuswatches/?notif_t=fbpage_fan_invite">
        <img src="../images/fb.png" alt="instagram"/>
        <h1>Invictus Watches</h1>
        </a>
    </div>
    
</section>';
}

function section_watches(){
return '
<section>
    <aside>
        <a href="classic.php"><h1>Classic Watches</h1></a>
        <a href="exclusive.php"><h1>Exclusive Watches</h1></a>
        <a href="sport.php"><h1>Sport Watches</h1></a>
        </aside>
</section>
    
    <section id="text">
    <h1>About our Watches</h1>
   <p> You should look amazing in keeping track of time, no matter what way you choose to spend it. Below are some of our latest watches.  Classic watches for the classic suit, and exlusive watches for the special moments. Sport models fit a wide range of styles.</p> 

<p> The face of the watch differ our models from the rest. By only using true quality parts and put together by the best in the business, we deliver models in a high fashion. </p>

<p> Stylish design combined with elegant details makes your strap special. In the creative process of designing our strap we strive for perfection and quality. Learn more about our models under “<a href="classic.php">Classic</a>”, “<a href="exclusive.php">Exclusive</a>” or “<a href="sport.php">Sport</a>”. </p>

  
    <article>
        <ul class="rslides">
            <li> <a href="classic.php"><img src="../images/slideclassic.jpg" alt="Classic"/></a></li>
            <li> <a href="exclusive.php"><img src="../images/slideexclusive.jpg" alt="Exclusive"/></a></li>
            <li> <a href="sport.php"><img src="../images/slidesport.jpg" alt="Sport"/></a></li>
</ul></article>
    </section>  

    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            
<script src="../html/responsiveslides.min.js"></script>
            
            <script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>
    
</body>

</html>'; 
}
function section_watches_login(){
return '
<section>
    <aside>
        <a href="classic.php"><h1>Classic Watches</h1></a>
        <a href="exclusive.php"><h1>Exclusive Watches</h1></a>
        <a href="sport.php"><h1>Sport Watches</h1></a>
        </aside>
</section>
    
    <section id="text">
    <h1>About our Watches</h1>
   <p> You should look amazing in keeping track of time, no matter what way you choose to spend it. Below are some of our latest watches.  Classic watches for the classic suit, and exlusive watches for the special moments. Sport models fit a wide range of styles.</p> 

<p> The face of the watch differ our models from the rest. By only using true quality parts and put together by the best in the business, we deliver models in a high fashion. </p>

<p> Stylish design combined with elegant details makes your strap special. In the creative process of designing our strap we strive for perfection and quality. Learn more about our models under “<a href="classic.php">Classic</a>”, “<a href="exclusive.php">Exclusive</a>” or “<a href="sport.php">Sport</a>”. </p>

  
    <article>
        <ul class="rslides">
            <li> <a href="classic.php"><img src="../images/slideclassic.jpg" alt="Classic"/></a></li>
            <li> <a href="exclusive.php"><img src="../images/slideexclusive.jpg" alt="Exclusive"/></a></li>
            <li> <a href="sport.php"><img src="../images/slidesport.jpg" alt="Sport"/></a></li>
</ul></article>
    </section>  

    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            
<script src="../html/responsiveslides.min.js"></script>
            
            <script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>
    
</body>

</html>'; 
}

function section_story(){
return '<section>
    <div id="bild">
    <img src="../images/sentence.jpg"/>
    </div>
    <aside>
    <h2>Our story</h2>
    <p>Time is an interesting phenomenon, some people say time is absolute and some says it’s relative. We at Invictus don’t know what to believe but we do believe in quality, style and that in whatever way you choose to spend your time, you should look amazing in keeping track of it.
    </p>
        
<p>We are five driven guys from Stockholm that lives for making a difference in people’s lives. Together we came up with and created Invictus watches, an exclusive luxury brand which is all about quality, style and service. Our handmade watches are built here in Stockholm with true quality parts and put together by the best in the business. its stylish design combined with elegant details gives you an accessory to trust and wear with confidence. Every model is produced in a limited amount of units, which makes every watch unique.
Our story is only the beginning, how you spend your time is the real story.
<br>
<br>
- We are Invictus
    </p>
    </aside>
    
    <aritcle id="founders">
    
    <h2>Founders</h2>
    
    <div>
        <h4>CEO - Jesper Eriksson</h4>
        <img src="../images/jesper.jpg" alt="Kevin" /><br>
<span>Invictus CEO Jesper Eriksson is the man controlling the company and its progress. You can find Jesper strolling the office with a smile on his face, mingling with the staff and hitting on the assistants. Jesper has a crucial role at Invictus and his speciality is brainstorming where he just throws ideas into the open, and other people write them down for him.
</span>
    </div>
        
    <div>
        <h4>Chief Information Officer - Gagan Gurminder</h4>
        <img src="../images/gagan.jpg" alt="Gagan" /><br>
<span>Gagan Gurminder is the ”IT-Guru” of the office. Ironically he never seems to be at the office. Where is Gagan? - The most frequently asked question within the Invictus organization. Gagan is the Invictus meeting specialist and travels the world pitching Invictus to the market and discussing business collaboration across the globe with selected companies. If Gagan is not at the office in Stockholm, he probably discusses contracts in Zurich or Dubai.
</span>
    </div>
        
    <div>
        <h4>Art Director - Staffan Marmenlind</h4>
        <img src="../images/staffan.jpg" alt="Staffan" /><br>
<span>When it comes to marketing, visual design and creative process Staffan is in charge. Everything from social media promotion to million dollar commercial spots goes through this man. Even though his parents left him a huge heritage he still comes to the office once in a while sparkling some advertising gold on the business.
</span>
    </div>

    <div>
        <h4>Webdesigner - Kevin Strimer</h4>
        <img src="../images/kevin.jpg" alt="Kevin" /><br>
<span>Kevin is the Webmaster at Invictus, his creative abilities combined with his programming skills makes him the best in his class. Kevin always comes up with a solution and no problem is too big for this man. His extraordinary productivity in the office leaves him a lot of time to play Fifa during business hours, and can be difficult to reach if you call during a exciting game of playstation.
</span>
    </div>

    <div>
        <h4>Intern - David Yu</h4>
        <img src="../images/david.jpg" alt="David" /><br>
<span>Our intern here at Invictus is David, a motivated young boy trying to make it in the big world. His programming skills is questionable but he always tries his best. A interesting man with a lot on his mind. David distinguish himself by carrying around a lot of computer keyboards and is known for always having freshly cut hair.
</span>
    </div>
    
    </article>
</section>';
}
function section_classic(){
    return "<section>
    
    <aside>
        <a id='classic' class='aktiv' href='classic.php'><h1>Classic Watches</h1></a>
        <a href='exclusive.php'><h1>Exclusive Watches</h1></a>
        <a href='sport.php'><h1>Sport Watches</h1></a>
        </aside>
    
</section>";
}
function section_exclusive(){
    return "<section>
    <aside>
        <a href='classic.php'><h1>Classic Watches</h1></a>
        <a id='exclusive' class='aktiv'href='exclusive.php'><h1>Exclusive Watches</h1></a>
        <a href='sport.php'><h1>Sport Watches</h1></a>
        </aside>
</section>";
}
function section_sport(){
    return "<section>
    <aside>
        <a href='classic.php'><h1>Classic Watches</h1></a>
        <a href='exclusive.php'><h1>Exclusive Watches</h1></a>
        <a id='sport' class='aktiv' href='sport.php'><h1>Sport Watches</h1></a>
        </aside>
</section>";
}

//Footer-delen till webbsidorna. 
function mall_footer(){
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
function mall_footer_login(){
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

</html>';
}
?>