<?php
include_once "header_footer_mall.php";
include_once "kundkorg.php";



session_start();
if(isset($_SESSION['kundkorg'])) {} else {
		$_SESSION['kundkorg'] = array();
	}
error_reporting(E_ALL);

if (isset($_SESSION['access']) && $_SESSION['access'] == 'admin') {
	
		show_logged_in_Admin ();
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
	echo index_header();//Ändra
    echo section_index();
	//echo get_page_head();//Hittar i kundkorg.php. 
	//echo get_products();//Hittar i products.php.  
	echo mall_footer();//Ändra
}



function show_logged_in()  {
    echo index_header_login();
    echo section_index();
	//echo get_admin_page_head(); //Hittar i kundkorg.php
	//echo get_page_head();//Hittar i kundkorg.php
	//echo get_offer_products();//Hittar i products.php
	//echo get_products();//Ändra. Titta till. 
	echo mall_footer_login();//Ändra

}
function show_logged_in_Admin()  {
    echo header_login_Admin();
    echo section_index();
	//echo get_admin_page_head(); //Hittar i kundkorg.php
	//echo get_page_head();//Hittar i kundkorg.php
	//echo get_offer_products();//Hittar i products.php
	//echo get_products();//Ändra. Titta till. 
	echo mall_footer_login();//Ändra

}
	


?>