<?php
/*
Grupp 5 - Invictus Watches 
Management med IT
Webbprogrammeringens grunder
Södetörns Högskola 
2016-01-08
*/
include_once "header_footer_mall.php";
include_once "products.php";
include_once "kundkorg.php";
//Denna kod hämtar alla varor från databasen och skriver ut de på hemsidan. 
session_start();
if(isset($_SESSION['kundkorg'])) {} else {
		$_SESSION['kundkorg'] = array();
	}
error_reporting(E_ALL);
//Sidan skriver ut exclusive klockor. If-satserna testar användarens usertype. Beroende på vilken type så har man tillgång till vissa funktioner. 
if(isset($_POST['tabortfrankundkorg'])) {
	ta_bort_fran_kundkorg($_POST['tabortfrankundkorg']);
	unset($_POST['tabortfrankundkorg']);
    

} else if(isset($_POST['tillkundkorgen'])) {
	lagg_till_i_kundkorg($_POST['tillkundkorgen']);
	unset($_POST['tillkundkorgen']);
	
} else if(isset($_POST['fragaombestallning']));


if (isset($_SESSION['access']) && $_SESSION['access'] == 'admin') {
	
		show_logged_in_Admin ();
}
	ELSEif (isset($_SESSION['login']) && $_SESSION['login'] = 'customer') {
	//http://www.php.net/manual/en/book.session.php
    

		show_logged_in();//Man hittar funktionen längre ner på sidan. 
} 	else {

show_start_screen();//Man hittar funktionen längre ner på sidan. 
	
}
//Olika funktion som visar olika funktioner beroende på användartyp. 
function show_start_screen() {//Visar index-sidan. 
// Error

$_SESSION['access']="user";
	echo classic_header(); //Hittar man i header_footer_mall.php
echo section_classic();//hittar man i header_footer_mall.php
echo get_products_classic();//Hittar man i products.php
echo mall_footer();//Hittar man i header_footer_mall.php
}



function show_logged_in()  {

echo classic_header_login();
echo section_classic();
echo get_products_classic();
echo mall_footer_login();

}
function show_logged_in_admin()  {

echo classic_header_login_admin();
echo section_classic();
echo get_products_classic();
echo mall_footer_login();

}
?>
