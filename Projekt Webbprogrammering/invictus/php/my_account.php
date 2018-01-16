<?php/*
Grupp 5 - Invictus Watches 
Management med IT
Webbprogrammeringens grunder
Södetörns Högskola 
2016-01-08
*/
include_once "header_footer_mall.php";

<?php
include_once "header_footer_mall.php";
include_once "kundkorg.php";



session_start();

error_reporting(E_ALL);
//Sidan skriver ut accountsida. Beroende på usertype så har man tillgång till olika funktioner. 

if(isset($_POST['tabortfrankundkorg'])) {
	ta_bort_fran_kundkorg($_POST['tabortfrankundkorg']);
	unset($_POST['tabortfrankundkorg']);
}

if(isset($_POST['tillkundkorgen'])) {
	lagg_till_i_kundkorg($_POST['tillkundkorgen']);
	unset($_POST['tillkundkorgen']);
}  
if (isset($_SESSION['access']) && $_SESSION['access'] == 'admin') {
	
		show_logged_in_Admin ();
}
	ELSEif (isset($_SESSION['login']) && $_SESSION['login'] = 'customer') {
	//http://www.php.net/manual/en/book.session.php
    

		show_logged_in();//Man hittar funktionen längre ner på sidan. 
} 	else {

show_start_screen();//Man hittar funktionen längre ner på sidan. 
	
}
//Olika funktion som visar olika funktioner beroende på användartyp
function show_start_screen() {//Visar index-sidan. 
// Error

$_SESSION['access']="user";
	echo account();//Ändra
    echo login_header();
	//echo get_page_head();//Hittar i kundkorg.php. 
	//echo get_products();//Hittar i products.php.  
	echo mall_footer();//Ändra
}



function show_logged_in()  {
    echo account();
    echo section_index();
	//echo get_admin_page_head(); //Hittar i kundkorg.php
	//echo get_page_head();//Hittar i kundkorg.php
	//echo get_offer_products();//Hittar i products.php
	//echo get_products();//Ändra. Titta till. 
	echo mall_footer();//Ändra

}
function show_logged_in_Admin()  {
    echo header_login_Admin();
    echo section_index();
	//echo get_admin_page_head(); //Hittar i kundkorg.php
	//echo get_page_head();//Hittar i kundkorg.php
	//echo get_offer_products();//Hittar i products.php
	//echo get_products();//Ändra. Titta till. 
	echo mall_footer();//Ändra

}
	


?>
?>