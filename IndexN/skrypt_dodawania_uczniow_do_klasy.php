<?php 
session_start()
require "baza.php";
  
$klasa=$_SESSION['klasa'];
$uczen=$_POST['sele'];
echo $klasa." ".$uczen;
echo "<br>";
$wynik->query("UPDATE `loginy` SET klasa='$klasa' WHERE id='$uczen'");

$wynik->close();
header('Location: panel_dodawania_ucznia_do_klas.php');
?>