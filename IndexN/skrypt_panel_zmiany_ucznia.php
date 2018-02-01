<?php
session_start();  
require "baza.php";
$n=$_SESSION['ilosc'];
for($i=0;$i<$n;$i++){
$login=$_POST['login'];
$haslo=$_POST['haslo'];
$typ="nieprzydzielony";
$wynik->query("INSERT INTO `loginy` (`login`,`haslo`,`email`,`typ`,`klasa`) VALUES ('$login[$i]','$haslo[$i]','null','$typ','null')");

}

$wynik->close();
		

header('Location: panel_dodania_ucznia.php');
//$wynik->query("INSERT INTO `lekcje` (`lekcja`) VALUES ('$kat')");
?>
