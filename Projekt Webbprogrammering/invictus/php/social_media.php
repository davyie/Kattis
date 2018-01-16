<?php
/*
Grupp 5 - Invictus Watches 
Management med IT
Webbprogrammeringens grunder
Södetörns Högskola 
2015-12-14
*/
include_once "header_footer_mall.php";
include_once "products.php";
include_once "kundkorg.php";

session_start();
if(isset($_SESSION['kundkorg'])) {} else {
		$_SESSION['kundkorg'] = array();
	}
error_reporting(E_ALL);


//Skriver egentligen ut ren HTML-kod men beroende på usertype ser man sitt konto när man trycker på my account. 
if (isset($_SESSION['access']) && $_SESSION['access'] == 'admin') {
	
		show_logged_in_Admin_social_media ();
}
	ELSEif (isset($_SESSION['login']) && $_SESSION['login'] = 'customer') {
	//http://www.php.net/manual/en/book.session.php
    

		show_logged_in();//Man hittar funktionen längre ner på sidan. 
} 	else {

show_start_screen();//Man hittar funktionen längre ner på sidan. 
	
}

function show_start_screen() {//Visar index-sidan. 
// Error

$_SESSION['access']="user";
echo socialmedier_header();
echo section_socialmedier();
echo mall_footer();
}



function show_logged_in()  {

echo socialmedier_header_login();
echo section_socialmedier();
echo mall_footer_login();

}
function show_logged_in_Admin_social_media()  {
    echo socialmedier_header_login_admin();
    echo section_socialmedier();
	echo mall_footer_login();//Ändra

}
?>
