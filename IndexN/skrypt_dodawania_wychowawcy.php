<?php
require "baza.php";
  
$nau=$_POST['sele'];
$klasa=$_POST['klas'];
$wynik->query("INSERT INTO wychowawcy (`nauczyciel`, `klasa`) VALUES ('$nau', '$klasa')");

$wynik->close();
header('Location: panel_dodania_wychowawcy.php');		
		
?>