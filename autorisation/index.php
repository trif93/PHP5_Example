<?php
	require "db.php";

	if(isset($_SESSION['logged_user'])){
		echo '<p>Autorised <br> Hi, '.$_SESSION['logged_user']->login.'!<br></p>';
		echo '<a href="/logout.php">Log out</a>';
	}
	else
	{
		echo '<p>You do not autorise!</p>
					<a href="/login.php">Log in</a> <br>
					<a href="/signup.php">Sign up</a>';
	}
?>



