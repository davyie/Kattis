<?php 
	include_once "header_footer_mall.php";
    include_once "db_connect.php";
	
 function login_form($msg='') {
	return 	$msg.'
    <section>
    <div id="login">
        
    <h2>Log in</h2>
        
    <form action="log_in.php" method="post">
    <p><label for="email">E-mail: </label>
    <br>
    <input type="text" id="email" name="email" size="30" /></p>
    <p><label for="pass">Password: </label>
    <br>
    <input type="password" id="pass" name="pass" size="30" /></p>
    <p><input type="submit" id="login" name="login" value="Log in" /></p>
    </form>
        
    </div>
</section>';
}

if(isset($_POST['email']) && isset($_POST['pass'])) {
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	// kolla om användarnamn och lösenord är rätt. check_credentials() returnerar information om användaren i en array.
	if($user_info = check_credentials($email, $pass)) {
		session_start();
		$_SESSION['login']='inloggad';
		if($user_info['usertype'] == 'customer') {
			
			$_SESSION['kundid']=$user_info['id'];

		} elseif ($user_info['usertype'] == 'admin') {
			$_SESSION['email']='Admin:'. $user_info['admin'];  
			$_SESSION['access'] = 'admin';   // Admin har andra rättigheter (som sätts per sida)
		}
	//skicka användaren till framsidan eller, om det är en annan sida användaren försöker nå. Till den.	
	if(isset($_GET['redirect'])) {
		header ("Location: ".$_GET['redirect']);

	} else {
		header ("Location: index.php");
    }
	
	} else {
	echo login_header('Logga in');
	echo login_form('<div class="errmsg">Inloggning misslyckades</div>');
	echo mall_footer();

	}

} else {
	echo login_header('Logga in');
	echo login_form('');
	echo mall_footer();

}
 
?>   