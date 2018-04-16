<?php 
session_start();
require "baza.php"; 
$kat=$_POST['logins'];
echo $kat;
$wynik->query("INSERT INTO `lekcje` (`lekcja`) VALUES ('$kat')");
 
$wynik->close();
header ('Location:../IndexA/admin.php'); 
?>