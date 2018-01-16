<?php
include_once "header_footer_mall.php";
include_once "products.php";

session_start();

error_reporting(E_ALL);


if(isset($_POST['tabortfrankundkorg'])) {
	ta_bort_fran_kundkorg($_POST['tabortfrankundkorg']);
	unset($_POST['tabortfrankundkorg']);
}

if(isset($_POST['tillkundkorgen'])) {
	lagg_till_i_kundkorg($_POST['tillkundkorgen']);
	unset($_POST['tillkundkorgen']);
}  

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
	//http://www.php.net/manual/en/book.session.php
    
show_start_screen();//Man hittar funktionen längre ner på sidan. 

} else {

show_logged_in();//Man hittar funktionen längre ner på sidan. 
	
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

	echo login_header();// Hittar login header
	echo mall_footer();//Ändra

}
	


?>