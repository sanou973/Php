<?php
/* this is the logout page. it destroys the cookie.*/
//destroy the cookie, but only if it already exists:

if (isset($_COOKIE['Samuel'])) {
	setcookie('Samuel', FALSE, time()-300);
}

//define  a page title and include the header:
define('TITLE', 'Logout');
include('templates/header.html');

//print the message:

echo '<p> You are now logged out.</p>'

//include the footer
include('templates/footer.html');
?>