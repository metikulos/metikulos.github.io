<?php 

	$message = $_POST['name'].' with '.$_POST['email'].' says: '.$_POST['message'];
	mail('herbert@metlitegh.com', $_POST['subject'], $message);

?>