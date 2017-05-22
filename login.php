<?php
/*this page lets people log into the site
*/

//two variable wiyh default values:

$loggedin = false;
$error = false;

//check if the form has been submitted:

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//handle the form

	if (!empty($_POST['id']) && !empty($_POST['password'])) {
		if(($_POST['id'] == '12340567') && ($_POST['password'] == 'testpass')){
			//create the cookie:
			setcookie('samuel', 'clemens', time()+3600);

			//indicate they are logged in:
			$loggedin = true;
		}else{
			//incorrect
			$error = 'the submitted id and password do not match those on file!';
		}
	}else{
		//forgot a field
		$error = 'please make sure you enter both an id and password!';
	}
}

define('TITTLE', 'Login');
include('templates/header.html');

//print an error if one exists:
if ($error) {
	print '<p class = "error">'.$error.'</p>';
}

//indicate the user is loged in, or show the form
if ($loggedin) {
	print '<p> You are now logged in !</p>';
}else{
	print '<h2> Login Form </h2>
	<form action="login.php" method="post">
	<p><label>id <input type="id" name="id" </label> </p> 
	<p> <label> Password <input type="password" name="password"></label></p>
	<p> <input type="submit" name="submit" value="Log in!"></p>
	</form>';
}

include('templates/footer.html');
?>