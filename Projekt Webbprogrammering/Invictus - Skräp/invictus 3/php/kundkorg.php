<?php
include_once "db_connect.php";
//Endast funktioner. Titta till. 
function lagg_till_i_kundkorg($id) {

	if(isset($_SESSION['kundkorg'])) {} else {
		$_SESSION['kundkorg'] = array();
	}

	if($mysqli = connect_db()) {
 	$sql = "SELECT * FROM produkt WHERE Produktid='".$id."'";//Här Titta här. 
 	$result = $mysqli->query($sql);
 	while($row = $result->fetch_array()) {
		array_push($_SESSION['kundkorg'], $row);
 	}
 } 
}
 
function ta_bort_fran_kundkorg($id_att_ta_bort) {
	foreach ($_SESSION['kundkorg'] as $key => $value) {
		if($id_att_ta_bort == $key) {
			unset($_SESSION['kundkorg'][$key]);
		}
	}
}

function get_admin_page_head() {
	
	$logged_in = (isset($_SESSION['login']) && $_SESSION['login'] != '');
	if($logged_in) {
		if(isset($_SESSION['access']) && $_SESSION['access'] == 'admin') {
		return "<div class=adminheader><a href='insert_product.php'>Insert product</a> 
		</div>";
	}
	}
	return "";
}

//Logout filen måste vara här. 
function get_page_head() {
	$logged_in = (isset($_SESSION['login']) && $_SESSION['login'] != '');

	if(isset($_SESSION['kundkorg'])) {
	$kundkorg = get_kundkorg($_SESSION['kundkorg']);
	} else {
		$kundkorg = "";
	}

	if($logged_in) {
		   return  "<a href='logout.php'>Log ut</a>". $kundkorg."</div>";			
	} else {
		   return "<div class='userinfo'><a href='login.php'>Log in</a>". $kundkorg."</div>";	
	}  

}

//Den här funktionen 
function get_kundkorg() {//funktionen visar ikonen på produkten när man har valt produkten. 
	$out = "<section id='kundkorg'>";

   	if(isset($_SESSION['kundkorg'])) {
		foreach ($_SESSION['kundkorg'] as $key => $value) {
		$out .= "<div class='product inbasket'><table><td>"
		."<div"
		."<p><b>".$value['produktnamn']."</b></p>" 
		. "<p>" .$value['produktnummer'].": ".$value['produktnamn']."</p>" 
		. "<p>Pris: " .$value['pris']."</p>" 
	//	. "<p>  <img src='." . $value['produktbild'] . "'></p>"	
		. "</div>"
		. "<form class='tabort' action=\"".htmlentities($_SERVER['PHP_SELF'])."\" method=POST><input type=submit value='X'/><input type=hidden name=tabortfrankundkorg value=".$key."/></form>"	
		."</td></table>"
		."</div>";
        }
	}

	$out .= "</section>"."<a href=kassa.php>Go to cart</a>";
	return $out;
}

function skräp(){
  "<div class='product inbasket'><table><td>"
		."<div"
		."<p><b>".$value['produktnamn']."</b></p>" 
		. "<p>" .$value['produktnummer'].": ".$value['produktnamn']."</p>" 
		. "<p>Pris: " .$value['pris']."</p>" 
	//	. "<p>  <img src='." . $value['produktbild'] . "'></p>"	
		. "</div>"
		. "<form class='tabort' action=\"".htmlentities($_SERVER['PHP_SELF'])."\" method=POST><input type=submit value='X'/><input type=hidden name=tabortfrankundkorg value=".$key."/></form>"	
		."</td></table>"
		."</div>";
}

//Den här funktionen 
function get_kundkorg_kassa() {
	$out = "<div id='kundkorg_i_kassa'>";
	if(count($_SESSION['kundkorg'])==0) {
		echo "<p>The cart is empty. Go to <a href='watches.php'>watches to get your very own Invictus watch</a></p>";
	} else {
		echo "<p>The cart contains ".count($_SESSION['kundkorg'])." product(s). <a href='watches.php'>Go to watches to continue your shopping by clicking here</a></p>";
	}
	if(isset($_SESSION['kundkorg'])) {
			foreach ($_SESSION['kundkorg'] as $key => $value) {
			$out .=     
        "<div id='produkt'>
        <img src='" . $value['Produktbild'] . "'></a>
    <ul style='list-style-type:none'>
    <li class='info'><p><strong>Name: </strong><br>" .$value['namn']. "</p></li>
    <li class='info'><p><strong>Type: </strong><br>" .$value['Type']. "</p></li>
    <li class='info'><p><strong>Price: </strong><br>" .$value['price']. "</p></li>
    </ul>
    <form class='tabort' action=\"".htmlentities($_SERVER['PHP_SELF'])."\" method=POST><input type=submit id='add' value='Remove from cart'/><input type=hidden name=tabortfrankundkorg value=".$key."/></form>
    </div>";
			}
               /* "<div class='product incashout'><h1>".$value['produktnamn']."</h1>" 
			. "<p>" .$value['produktnummer'].": ".$value['produktnamn']."</p>" 
			. "<p>" .$value['beskrivning']."</p>" 
			. "<p>Pris: " .$value['pris']."</p>" 
			. "<p>  <img src='." . $value['produktbild'] . "'></p>"	
			. "<p>" .$value['lagersaldo'] . "</p>"
						."</div>";*/
	}
	
	$out .= "</div>";
	return $out;
}


	
?>
