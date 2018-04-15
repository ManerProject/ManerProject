<?php 
session_start();
$data= date('Y.m.d');

for($j=0;$j<strlen($data);$j++)
{
	if($data[$j]=='.')
	{
		$data[$j]='-';
	}
}
require "baza.php";
$kl= $_SESSION['kl']; 
echo " ";
$lek=$_SESSION['xdlekcja'];

$id=0;
$i=0;
$nau= $_SESSION['nauczycielid'];
if ($result = $wynik->query("SELECT * FROM `loginy` WHERE klasa='$kl'")) 
{
	while($w=$result->fetch_assoc())
	{
		$gg = trim($_POST['hej'][$i]);
		if(  $_POST['hej'][$i]<7)
		{
			if( $_POST['hej'][$i]==0)
			{
				echo $w['login'];
			}
			else
			{
				$ocena=$_POST['hej'][$i];
				$nick=$w['id'];
				echo $_SESSION['pompom'][$i];
				if($_SESSION['pompom'][$i]==0)
				{
					$wynik->query("INSERT INTO `ocenysemestralne`(`id`, `idklasy`, `idlekcja`, `Semestr`, `Ocena`, `iducznia`, `Data`,`idnauczyciela`) VALUES (NULL,'$kl','$lek',1,'$ocena','$nick','$data','$nau')");
				}
				if($_SESSION['pompom'][$i]==1)
				{
					$wynik->query("UPDATE `ocenysemestralne` SET `Ocena`=$ocena,`Data`=$data,`idnauczyciela`='30' WHERE `idklasy`='$kl' and  `idlekcja`='$lek' and `iducznia`='$nick'");
				}
			}  
		}
		$i++;
	}
}
header ('Location:wystawienieocen.php');
$wynik->close();
?>