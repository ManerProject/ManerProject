<?php
session_start();  
require "baza.php";
$email=$_POST['email'];
 $login=$_SESSION['login'];
 $haslo =$_SESSION['haslo'];
$result=$wynik->query("update `loginy` set email='$email' where login='$login'");

if ($result = $wynik->query("SELECT * FROM `loginy` WHERE login='$login' and haslo='$haslo'"))
{	

	$w=$result->fetch_assoc();
	$t=$w['typ'];
	if($t=="nieprzydzielony")
	{
	header ('Location:pierwsze_logowanie.php');
	}
	if($t=="uczen")
	{
	
		header ('Location:IndexU/index1.php');
			
			  
	}
}




header('Location:IndexU/index1.php');
//$wynik->query("INSERT INTO `lekcje` (`lekcja`) VALUES ('$kat')");
?>
