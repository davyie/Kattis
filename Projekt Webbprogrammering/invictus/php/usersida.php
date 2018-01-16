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
session_start();
if(isset($_SESSION['kundkorg'])) {} else {
		$_SESSION['kundkorg'] = array();
	}


echo show_logged_in();




//Olika funktion som visar olika funktioner beroende på användartyp

function show_logged_in()  {

echo login_header_login();
echo section_usersida();
echo mall_footer_login();

}
?>		