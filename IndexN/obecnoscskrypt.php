<?php
session_start();
require "baza.php";





$data=$_SESSION['data'];
$nl=$_POST['numer_lekcji'];


$kl= $_SESSION['kl'];


$login= $_SESSION['loginy'];

for($j=0;$j<strlen($data);$j++)
{
	if($data[$j]=='.')
		$data[$j]='-';
	
}
$i=0;

   if ($result = $wynik->query("SELECT * FROM `loginy` WHERE klasa='$kl'")) {
   
    while($w=$result->fetch_assoc()){
     
	 
	 echo " ";
	 
	 
	 if($_POST['obecnosc'][$i]=="1 Obecny")
		 $obecnosc=1;
	 	 if($_POST['obecnosc'][$i]=="2 Nie obecny")
		 $obecnosc=2;
	  if($_POST['obecnosc'][$i]=="3 Spoznienie")
		 $obecnosc=3;
	 $uczen=$w['id'];
	

	 	 $wynik->query("INSERT INTO `obeconsc` (`id`, `data`, `obecnosc`, `numer_lekcji`,`uczen`) VALUES (NULL, '$data', '$obecnosc', '$nl', '$uczen')");
	 

$i++;
	 }
   }
   
 header ('Location:obecnosc.php');











?>