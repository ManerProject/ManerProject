<?php
session_start();
require "baza.php";

$kl=$_SESSION['kl'];
echo "</br>";
echo "</br>";

$lek=$_SESSION['xdlekcja'];
echo "</br>";
echo $_POST['pdr'];
$pdr=$_POST['pdr'];
echo "</br>";
echo $_POST['czw'];
$czw=$_POST['czw'];
echo "</br>";
$nau= $_SESSION['nauczycielid'];
if( $_SESSION['$isset2']==1 or $_SESSION['$isset1']==1)
{
	$wynik->query("UPDATE `podreczniki` SET `NazwaCzwiczen`='$czw',`NazwaPodrecznika`='$pdr' WHERE `idklasy`='$kl' and `idlekcja`='$lek' ");
}
else
	
$wynik->query("INSERT INTO `podreczniki`(`idPodrcznikow`, `idklasy`, `idlekcja`, `idnauczyciel`, `NazwaPodrecznika`, `NazwaCzwiczen`) VALUES (NULL,'$kl','$lek','$nau','$pdr','$czw')");
header ('Location:RozpiskaPodrecznikow.php');
?>