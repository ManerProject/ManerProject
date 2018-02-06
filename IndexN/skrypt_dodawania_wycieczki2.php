<?php
session_start();


 require "baza.php";
  
$dni=$_SESSION['dni'];
$godz=$_SESSION['godz'];
$klasa=$_SESSION['klasa'];
$cel=$_SESSION['cel'];
$program=$_SESSION['program'];
$data=$_SESSION['data'];
$liczba=$_SESSION['liczba'];
$nau=$_SESSION['nau'];
$ile=$_SESSION['ile'];

$opiekun="";	
for($i=1;$i<=$ile;$i++)
{
	$o="opiekun".$i;
	$opiekun=$opiekun.$_POST[$o];
	$opiekun=$opiekun.",";
}
$wynik->query("INSERT INTO `wycieczki` (`id`, `klasa`, `data`, `czas_dni`, `czas_godz`, `liczba_uczniow`, `cel`, `program`, `nauczyciel`, `opiekun`) VALUES (NULL, '$klasa', '$data', '$dni', '$godz', '$liczba', '$cel', '$program', '$nau', '$opiekun')");
header('Location: panel_dodawania_wycieczek.php');

?>