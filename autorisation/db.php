<?php

	require "libs/rb.php";
	R::setup( 'mysql:host=localhost;dbname=workoutnotes',
        'root', '' );
	session_start();
?>