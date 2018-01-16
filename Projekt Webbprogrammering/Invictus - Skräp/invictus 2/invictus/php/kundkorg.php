<?php
//Endast funktioner. Titta till. 
function lagg_till_i_kundkorg($id) {

	if(isset($_SESSION['kundkorg'])) {} else {
		$_SESSION['kundkorg'] = array();
	}

	if($mysqli = connect_db()) {
 	$sql = "SELECT * FROM produkt WHERE Produktid='".$id."'";
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
		return "<div class=adminheader><h2>Alternativ för admin</h2><a href='rapporter/visarapport.php'>Visa försäljningsrapport</a>  <a href='visasummering.php'>Visa summering</a>  <a href='lagginprodukt.php'>Lägg till produkt</a>
		</div>";
	}
	}
	return "";
}

function get_page_head() {
	$logged_in = (isset($_SESSION['login']) && $_SESSION['login'] != '');

	if(isset($_SESSION['kundkorg'])) {
	$kundkorg = get_kundkorg($_SESSION['kundkorg']);
	} else {
		$kundkorg = "";
	}

	if($logged_in) {
		   return  "<a href='logout.php'>Logga ut</a>". $kundkorg."</div>";			
	} else {
		   return "<div class='userinfo'><a href='login.php'>Logga in</a>". $kundkorg."</div>";	
	}


}


function get_kundkorg() {//funktionen visar ikonen på produkten när man har valt produkten. 
	$out = "<div id='kundkorg'>";

   	if(isset($_SESSION['kundkorg'])) {
		foreach ($_SESSION['kundkorg'] as $key => $value) {
		$out .= "<div class='product inbasket'><table><td>"
		."<div"
		."<p><b>".$value['namn']."</b></p>" 
		. "<p>" .$value['Type']."</p>" 
		. "<p>Pris: " .$value['price']."</p>" 
	//	. "<p>  <img src='." . $value['produktbild'] . "'></p>"	
		. "</div>"
		. "<form class='tabort' action=\"".htmlentities($_SERVER['PHP_SELF'])."\" method=POST><input type=submit value='X'/><input type=hidden name=tabortfrankundkorg value=".$key."/></form>"	
		."</td></table>"
		."</div>";
        }
            "<section id='produkt'>
    <article>
        <img src='" . $key['Produktbild'] . "'></a>
    </article>
    <div>
    <ul>
    <li class='" .$key."'><p>Name: " .$key['namn']. "</p></li>
    <li class='" .$key."'><p>Type: " .$key['Type']. "</p></li>
    <li class='" .$key."'><p>Price: " .$key['price']. "</p></li>
    </ul>
    </div>
    <form class='tabort' action=\"".htmlentities($_SERVER['PHP_SELF'])."\" method=POST><input type=submit value='X'/><input type=hidden name=tabortfrankundkorg value=".$key."/></form>
	</div>
    </section>";
	}

	$out .= "</div>"."<a href=kassa.php>Gå till kassan</a>";
	return $out;
}

function skräp(){
  "<div class='product inbasket'><table><td>"
		."<div"
		."<p><b>".$value['namn']."</b></p>" 
		. "<p>" .$value['Produktnummer'].": ".$value['produktnamn']."</p>" 
		. "<p>Pris: " .$value['price']."</p>" 
	//	. "<p>  <img src='." . $value['produktbild'] . "'></p>"	
		. "</div>"
		. "<form class='tabort' action=\"".htmlentities($_SERVER['PHP_SELF'])."\" method=POST><input type=submit value='X'/><input type=hidden name=tabortfrankundkorg value=".$key."/></form>"	
		."</td></table>"
		."</div>";
}

function get_kundkorg_kassa() {
	$out = "<div id='kundkorg_i_kassa'>";
	if(count($_SESSION['kundkorg'])==0) {
		echo "<p>Kassan är tom. Gå till <a href='index.php'>framsidan för att handla</a></p>";
	} else {
		echo "<p>Kassan innehåller ".count($_SESSION['kundkorg'])." produkter. Gå till <a href='index.php'>framsidan för att fortsätta handla</a></p>";
	}
	if(isset($_SESSION['kundkorg'])) {
			foreach ($_SESSION['kundkorg'] as $key => $value) {
			$out .=     
        "<section id='produkt'>
    <article>
        <img src='" . $value['Produktbild'] . "'></a>
    </article>
    <div>
    <ul>
    <li class='" .$value."'><p>Name: " .$value['namn']. "</p></li>
    <li class='" .$value."'><p>Type: " .$value['Type']. "</p></li>
    <li class='" .$value."'><p>Price: " .$value['price']. "</p></li>
    </ul>
    </div>
    </section>";
			}
                "<div class='product incashout'><h1>".$value['namn']."</h1>" 
			. "<p>" .$value['Produktnummer'].": ".$value['namn']."</p>" 
			. "<p>" .$value['beskrivning']."</p>" 
			. "<p>price: " .$value['price']."</p>" 
			. "<p>  <img src='." . $value['Produktbild'] . "'></p>"	
			. "<p>" .$value['Lagersaldo'] . "</p>"
						."</div>";
	}
	
	$out .= "</div>";
	return $out;
}


	
?>
