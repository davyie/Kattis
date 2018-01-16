<?php
/*
Invictus Watches
2016-01-10 
Se till att länka rätt. Både i navigationen och här(include_once och sånt). 
Skriv rätt filväg/sökväg sådan att den här filen hittar rätt.
*/
include_once "db_connect.php";
include_once "header_footer_mall.php";
include_once "data.php";//Denna är rätt. 


error_reporting(0);

session_start();

$logged_in = (isset($_SESSION['login']) && $_SESSION['login'] != '');

	if($logged_in) {
		if(isset($_SESSION['access']) && $_SESSION['access'] == 'admin') {
			echo header_login_admin();//titta här/ändra här 
		

			echo uppdatera_data();//Funktionen finns i data.php. 
			echo get_report();//Funktionen finns längre ner i det här dokumentet. 
            echo table();//Finns i data.php.         
            echo "<a href='admin - rapporter/tmp/forsaljningsdata.tsv'>Ladda ner</a>"; 
			echo mall_footer_login();
		} else {
			header ("Location: login.php");
		}
	} else {
			header ("Location: index.php");
	}



function get_report() {
	return '<h1>Försäljning</h1>
	<section id="diagram1"></section>
<script src="http://d3js.org/d3.v3.min.js"></script>
<script src="admin - rapporter/script.js"></script>';
	
}

?>