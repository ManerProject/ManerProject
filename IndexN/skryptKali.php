<?php
session_start();
require "baza.php";

$klasa= $_SESSION['kl'];
$nau= $_SESSION['nauczycielid'];
$lekcja=$_SESSION['xdlekcja'];
$data=$_POST['data'];
$typ=$_POST['typ'];
$tresc=$_POST['tresc'];
for($j=0;$j<strlen($data);$j++)
{
	if($data[$j]=='.')
	{
		$data[$j]='-';
	}
}
//$wynik->query("INSERT INTO `obeconsc` (`id`, `data`, `obecnosc`, `numer_lekcji`,`uczen`,`klasa`,`dzienTygodnia`) VALUES (NULL, '$data', '$obecnosc', '$nl', '$uczen','$kl','$xd')");
echo $data;
$wynik->query("INSERT INTO `kalendarz`(`idkalendarza`, `idlekcji`, `idklasa`, `idnauczyciel`, `tresc`, `data`,`typ`) VALUES (null,$lekcja,$klasa,$nau,'$tresc','$data',$typ)");

header('location:kalendarz.php');
?>