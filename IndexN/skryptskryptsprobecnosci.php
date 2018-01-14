<?php
session_start();
require "baza.php";









$kl= $_SESSION['kl'];



$uczen=$_SESSION['uczenxdxd'];

$i=0;

   if ($result = $wynik->query("SELECT * FROM `obeconsc` WHERE `obecnosc`=2 and `uczen`='$uczen' ORDER by `DATA`,`numer_lekcji`")) {
   
    while($w=$result->fetch_assoc()){
     
	 
	 echo " ";
	 
	 $id=$w['id'];
	 if($_POST['obecnosc'][$i]=="2 Usprawliwione")
	 {
		 
		 $wynik->query("UPDATE `obeconsc` SET `obecnosc`=11 WHERE `id`=$id");
	 }
	 
	 	
	 
	 
	

	 	
	 
echo $_POST['obecnosc'][$i];
echo " ";
echo $id;
echo " ";
$i++;
	 }
   }
   header ('Location:skrypsprobecnosci.php');












?>