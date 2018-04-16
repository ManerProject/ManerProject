<?php
session_start();
require "baza.php";

$nau=$_SESSION['nauczycielid'];
$ile=$_SESSION['ilosc'];
$opis=$_SESSION['opis'];
$rodzic="";	
for($i=1;$i<=$ile;$i++)
{
	$o="rodzic".$i;
	$rodzic=$rodzic.$_POST[$o];
	$rodzic=$rodzic.",";
}
$wynik->query("INSERT INTO `kontakty_rodzic_nauczyciel` (`id`, `nauczyciel`, `rodzice`, `data`, `opis`) VALUES (NULL, '$nau', '$rodzic', '$data', '$opis')");
header('Location: panel_dodawania_spotkan.php');
?>