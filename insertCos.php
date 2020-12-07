<?php
include "connection.php";
session_start();
$id=$_POST['option'];
$sq = "SELECT * FROM Accesorii WHERE ID = '$id'";
$row = mysql_query(sq);

$sq = "INSERT INTO Cos WHERE ID = '$id'";


