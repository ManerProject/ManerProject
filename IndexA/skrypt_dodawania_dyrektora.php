<?php
require "baza.php";
  
$nau=$_POST['nauc'];
$wynik->query("INSERT INTO `dyrektorzy` (`nauczyciel`) VALUES ('$nau')");
$wynik->close();
header('Location: panel_dodania_dyrektora.php');		
		
?>