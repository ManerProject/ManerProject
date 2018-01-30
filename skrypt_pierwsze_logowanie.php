<?php
session_start();  
require "baza.php";
$email=$_POST['email'];

$wynik->query("update `loginy` (`email`) values ('$email')");



$wynik->close();
		

header('Location: panel_dodania_ucznia.php');
//$wynik->query("INSERT INTO `lekcje` (`lekcja`) VALUES ('$kat')");
?>
