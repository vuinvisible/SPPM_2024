<?php
	session_start();
	unset($_SESSION['dcemail']);
	header('location: index.php');
?>