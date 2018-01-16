<?php
include_once "html_headers.php";

session_start();

$logged_in = (isset($_SESSION['login']) && $_SESSION['login'] != '');

print_r('<br>$_SESSION: ');
print_r($_SESSION);

	if($logged_in) {
		if(isset($_SESSION['access']) && $_SESSION['access'] == 'admin') {
			echo html_header();//Ändra
			echo "Du är inloggad som Admin:".$_SESSION['user'].
			     "<br>";
			echo "<a href='logout.php'>Logga ut</a>";
			echo html_footer();//Ändra
		} else {
			echo html_header();//Ändra
			echo "Du är inloggad som användare.".$_SESSION['user'].
			     "<br>";
			echo "<a href='logout.php'>Logga ut</a>";
			echo html_footer();//Ändra


		}
	} else {
		echo html_header();//Ändra
			echo "Du inte inloggad.".
			     "<br>";
			echo "<a href='login.php?redirect=skyddad_mallsida.php'>Logga in</a>";
			echo html_footer();//Ändra

}
?>