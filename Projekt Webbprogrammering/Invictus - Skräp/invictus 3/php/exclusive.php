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

if(isset($_POST['tabortfrankundkorg'])) {
	ta_bort_fran_kundkorg($_POST['tabortfrankundkorg']);
	unset($_POST['tabortfrankundkorg']);
    

} else if(isset($_POST['tillkundkorgen'])) {
	lagg_till_i_kundkorg($_POST['tillkundkorgen']);
	unset($_POST['tillkundkorgen']);
	
} else if(isset($_POST['fragaombestallning']));


if (isset($_SESSION['access']) && $_SESSION['access'] == 'admin') {
	
		show_logged_in_admin_exclusive ();
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
	echo exclusive_header();
echo section_exclusive();
echo get_products_exclusive();
echo mall_footer();
}



function show_logged_in()  {

echo exclusive_header_login();
echo section_exclusive();
echo get_products_exclusive();
echo mall_footer_login();

}
function show_logged_in_admin_exclusive()  {

echo exclusive_header_login_admin();
echo section_exclusive();
echo get_products_exclusive();
echo mall_footer_login();

}
?>

