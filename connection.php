<?php
	$user="alexandru.stanciu";
	$pass="Sa199092";
	$host="localhost";
	$db="u_alexandrustanc";
	
mysql_connect($host, $user, $pass) or die("Serverul nu functioneaza!");
mysql_select_db($db) or die("Nu exista baza de date!");
?>