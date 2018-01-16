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
    show_kassa();

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
	
	$kundid = ny_kund($_POST['fnamn'], $_POST['enamn'], $_POST['adress'],$_POST['telefonnummer'], $_POST['email'],  $_POST['pass'],$_POST['postnummer'], $_POST['postort']);

	$orderid = lagg_in_order($kundid);//Funktion i order. 
	echo kassa_header();//Ändra
	show_tack($orderid);//Ändra
	echo mall_footer();//Ändra

} else {
	show_kassa();//här 
}


function show_tack($ordernumret) {//Funktion som visar slut processen av beställning. 
	$tack = "<h1>Thank you for your order!</h1> <p>Order-info can be found below. Note order-number for future questions. Ordernumber: ".$ordernumret."</p>";

	echo $tack.get_order($ordernumret)."<p><a href='index.php'>First page</a></p>";

}

function get_betalningssida_med_kundinmatning() {//Funktion för när man beställer utan att logga in. 

	$out = '
    
    <section>
    <div id="register">
	<h2>Register as a new customer</h2>
    
	<form action="" method="POST">'.
	'
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
    <p><input type="submit" id="ord" name=submit value="Register to order"/></p>
    <input type=hidden name=adderakund_och_bestall>
	</form>
<a href=index.php>Back to first page</a>

</section>
	';

return $out;


}


function ny_kund($fnamn,$enamn,$adress,$telefonnummer,$email,$pass,$postnummer,$postort) {

	if($mysqli = connect_db()) {
		
	}
	$sql = "INSERT INTO kunder(fnamn, enamn, adress, telefonnummer, email, pass, postnummer, postort) VALUES ("
		."'".$fnamn."',"  
		."'".$enamn."',"        
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

		return "<h1>Click on Order to place an order</h1><form method=POST action=''><input type=submit value='Beställ'/><input type=hidden name='bestallninggjord'/></form>";

}

function get_bestallning() {

if(count($_SESSION['kundkorg'])==0) {
	return "";
	} else {
		if($_SESSION['access']=="admin") {
			return "You can not place an order when you logged in as admin. Log in as a regular user to place an order. <a href=index.php>Back to first page</a>";
		} else {
			return "<form method=POST action=''><input type=submit value='Place order'/><input type=hidden name='fragaombestallning'/></form>"
	. "<a href=index.php>Back to first page</a>";
	}
	}


}


//Kolla till!!!!!!!!!!!!!!!!!!!!!!! 
function get_kassa() {

	return get_kundkorg_kassa().get_bestallning();

}



function show_kassa() {

	echo kassa_header();//Ändra
	echo get_kassa();
	echo mall_footer();//Ändra
}

	


?>