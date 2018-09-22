<?php 
	include("header.html"); 
	session_start();
	$akses = $_SESSION["akses"];
	if ($akses == "admin") 
		header("Location: form.html");
	else
		echo "Halaman Boleh Diakses";
 ?>
 <?php
 	include("footer.html");
 ?>
 