<?php
/*
HÄR ÄNDRADE JAG. 
*/
include_once "header_footer_mall.php";
include_once "products.php";
include_once "kundkorg.php";

session_start();
if(isset($_SESSION['kundkorg'])) {} else {
		$_SESSION['kundkorg'] = array();
	}
error_reporting(E_ALL);



if (isset($_SESSION['access']) && $_SESSION['access'] == 'admin') {
	
		show_logged_in_Admin_ourstory ();
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
echo ourstory_header();
echo section_story();
echo mall_footer();
}



function show_logged_in()  {

echo ourstory_header_login();
echo section_story();
echo mall_footer_login();

}
function show_logged_in_Admin_ourstory()  {
    echo ourstory_header_login_admin();
    echo section_story();
	echo mall_footer_login();//Ändra

}

?>
