<?php
	print_r($_POST);
	if(isset($_POST["done"]))
		if($_POST["name"] =="")
			echo "Input your name. <a href='\'>Change name</a>";
		else
			//header("Location:index.php");
			$message = $_POST["message"];
			$fromemail = "bars@gmail.com";
			$toemail = $_POST["email"];
			$subject = "Message from ".$_POST["name"];
			$subject = "=?utf-8?B?".base64_encode($subject)."?=";
			$headers = "From: $fromemail\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
			mail ($toemail,$subject,$message,$headers);
?>