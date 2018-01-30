<?php 
session_start();
$klasa= $_SESSION['kl'];
require "baza.php";
$data= date('Y.m.d');

for($j=0;$j<strlen($data);$j++)
{
	if($data[$j]=='.')
		$data[$j]='-';
	
}

$numer2=$_SESSION['numer'];
$numer2++;
 ?>
<?php
 
require "baza.php";
 
 if ($result = $wynik->query("SELECT * FROM `loginy` WHERE Klasa='$klasa'")) {
   
    while($w=$result->fetch_assoc()){
	
		echo $w['id'];
		if ($result1 = $wynik->query("SELECT * FROM obeconsc WHERE data='$data' AND uczen='$w['id']' AND numer_lekcji='$numer'")) {
   
	
		//$wynik-> query("INSERT INTO `obeconsc` ( `data`, `obecnosc`, `numer_lekcji`, `uczen`, `klasa`, `dzienTygodnia`,) VALUES ( '$w['data']', '$w['obecnosc']', '$numer2', '$w['uczen']', '$w['klasa']', '$w['dzienTygodnia']')");
	
	}
}


 echo $_SESSION['numer'];
 ?>
 <br>
 <?php
 echo $klasa;
 ?>
 <br>
 <?php
 echo $data;
 ?>
 <br>
 <?php
 echo $numer2;
  
  
  //header ("Location:nau.php");
  

?>