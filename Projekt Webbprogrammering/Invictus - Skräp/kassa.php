<?php
/*
Denna fil håller på med beställningen. 
Alla stegen i beställningsprocessen. 
Funktionerna på denna fil behöver ändras till vårt fall. 
*/
include_once "header_footer_mall.php";
include_once "products.php";
include_once "kundkorg.php";
include_once "order.php";

session_start();


if(isset($_POST['tabortfrankundkorg'])) {
	ta_bort_fran_kundkorg($_POST['tabortfrankundkorg']);
	unset($_POST['tabortfrankundkorg']);

} else if(isset($_POST['tillkundkorgen'])) {
	lagg_till_i_kundkorg($_POST['tillkundkorgen']);
	unset($_POST['tillkundkorgen']);
	show_kassa();//här 
} else if(isset($_POST['fragaombestallning'])) {



$logged_in = (isset($_SESSION['login']) && $_SESSION['login'] != '');

//print_r($_SESSION['login']);


	echo kassa_header();//Ändra 
	if($logged_in) {
	  echo get_betalningssida();//Finns längre ner på sidan. 
	} else {
	  echo get_betalningssida_med_kundinmatning();//Finns längre ner på sidan. 
	}
	echo mall_footer();//ändra

} else if(isset($_POST['bestallninggjord']) ) {

	$orderid = lagg_in_order($_SESSION['kundid']);//Funktion i order. 
    
	echo kassa_header();//Ändra
	show_tack($orderid);//Ändra
	echo mall_footer();//Ändra

} else if(isset($_POST['adderakund_och_bestall']) ) {
	
	$kundid = ny_kund($_POST['fnamn'], $_POST['enamn'], $_POST['adress'],$_POST['postnummer'], $_POST['postort'], $_POST['e-mail']);

	$orderid = lagg_in_order($kundid);//Funktion i order. 
	echo kassa_header();//Ändra
	show_tack($orderid);//Ändra
	echo mall_footer();//Ändra

} else {
	show_kassa();//här 
}


function show_tack($ordernumret) {//Funktion som visar slut processen av beställning. 
	$tack = "<h1>Tack för din order!</h1> <p>Orderinformation finner 
	du nedan. Notera ordernumret för eventuella frågor. Ordernummer: ".$ordernumret."</p>";

	echo $tack.get_order($ordernumret)."<p><a href='index.php'>Förstasidan</a></p>";

}



if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
	//http://www.php.net/manual/en/book.session.php


} else {

	
}

function get_betalningssida_med_kundinmatning() {//Funktion för när man beställer utan att logga in. 

	$out = '
	<h1>Registrera dig som ny kund</h1>
	<h3>Klicka på Beställ nedan för att skicka din order</h3>
	<form id="nykund" action="" method="POST">'.
	'
	<label for="famn">Förnamn</label>
	<input type=text name="fnamn"/>
	</br>
 	<label for="enamn">Efternamn</label>
	<input type=text name="enamn"/>
	</br>
	<label for="fornamn">adress</label>
	<input type=text name="adress"/>
	</br>
	<label for="telefonnummer">telefonnummer</label>
	<input type=text name="telefonnummer"/>
	</br>
	<label for="email">email</label>
	<input type=text name="email"/>
	</br>
	<label for="pass">password</label>
	<input type=text name="pass"/>
	</br>
	<label for="postnummer">postnummer</label>
	<input type=text name="postnummer"/>
	</br>
	<label for="postort">postort</label>
	<input type=text name="postort"/>
	</br>
    <input type="submit" name=submit value="Beställ"/>
    <input type=hidden name=adderakund_och_bestall>
	</form>
<a href=index.php>Tillbaka till huvudsidan</a>
	';

return $out;


}

//Fixa funktionen!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
function ny_kund($fnamn,$enamn,$adress,$telefonnummer,$email,$pass,$postnummer,$postort) {

	if($mysqli = connect_db()) {
		
	}
	$sql = "INSERT INTO kunder(fnamn, enamn, adress, telefonnummer, email, pass, postnummer, postort) VALUES ("
		."'".$fnamn."',"  // epost används som användarnamn för nya kunder...
		."'".$enamn."',"        // Vi borde ha någon funktion som sätter något annat än förnamn som lösenord
		."'".$adress."'," 
		."'".$telefonnummer."',"
		."'".$email."',"
		."'".$pass."'," 
		."'".$postnummer."'," 
		."'".$postort."')";

	$mysqli->query($sql);
	//print_r($mysqli->error);
	return $mysqli->insert_id;


}///Ändra

function get_betalningssida() {

		return "<h1>Klicka på Beställ nedan för att skicka din order</h1><form method=POST action=''><input type=submit value='Beställ'/><input type=hidden name='bestallninggjord'/></form>";

}

function get_bestallning() {

if(count($_SESSION['kundkorg'])==0) {
	return "";
	} else {
		if($_SESSION['access']=="admin") {
			return "Beställningar är avstängd för Admin. Logga in som annan användare för att testa. <a href=index.php>Tillbaka till huvudsidan</a>";
		} else {
			return "<form method=POST action=''><input type=submit value='Utför beställning'/><input type=hidden name='fragaombestallning'/></form>"
	. "<a href=index.php>Tillbaka till huvudsidan</a>";
	}
	}


}


//Kolla till!!!!!!!!!!!!!!!!!!!!!!! 
function get_kassa() {

	return get_kundkorg_kassa().get_bestallning();

}



function show_kassa() {

	echo index_header();//Ändra
	echo get_kassa();
	echo mall_footer();//Ändra
}

	


?>