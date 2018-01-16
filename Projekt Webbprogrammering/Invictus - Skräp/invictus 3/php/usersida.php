<?php

include_once "db_connect.php";
include_once "header_footer_mall.php";
session_start();
if(isset($_SESSION['kundkorg'])) {} else {
		$_SESSION['kundkorg'] = array();
	}
echo show_logged_in();




function show_logged_in()  {

echo index_header_login();
echo mall_footer_login();
}

?>