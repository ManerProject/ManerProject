<?php
session_start();
require "baza.php";




$data=$_SESSION['data'];
$nl=$_POST['numer_lekcji'];
$temat=$_POST['temat'];

$kl= $_SESSION['kl'];


$login= $_SESSION['loginy'];

for($j=0;$j<strlen($data);$j++)
{
	if($data[$j]=='.')
		$data[$j]='-';
	
}
$i=0;
$xx=date('N');
if ($result = $wynik->query("SELECT * FROM `planlekcji` WHERE klasa='$kl' and dzien='$xx'")) {
   
    while($w=$result->fetch_assoc()){
		$xd=$w['id'];
		
		
	}
	
}
 if ($result=$wynik->query("SELECT * FROM `loginy` WHERE klasa='$kl'")) {
	 $wynik->query("INSERT INTO `tematy` (`id`, `idklasa`, `idlekcja`,`data`,`temat`) VALUES (NULL, '$kl', '$nl','$data','$temat')");
 }
   if ($result = $wynik->query("SELECT * FROM `loginy` WHERE klasa='$kl'")) {
	 
    while($w=$result->fetch_assoc()){
     
	 
	
	 
	 
	 if($_POST['obecnosc'][$i]=="1 Obecny")
		 $obecnosc=1;
	 	 if($_POST['obecnosc'][$i]=="2 Nie obecny")
		 $obecnosc=2;
	  if($_POST['obecnosc'][$i]=="3 Spoznienie")
		 $obecnosc=3;
	 $uczen=$w['id'];
	


	 	 $wynik->query("INSERT INTO `obeconsc` (`id`, `data`, `obecnosc`, `numer_lekcji`,`uczen`,`klasa`,`dzienTygodnia`) VALUES (NULL, '$data', '$obecnosc', '$nl', '$uczen','$kl','$xd')");
	     

$i++;
	 }
   }
   
 header ('Location:obecnosc.php');











?>