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
?>
 <br>
 <?php
 echo $data;
 ?>
 <br>
 <?php
 echo $klasa;
 ?>
 <br>
 <?php
 echo $_SESSION['numer'];
 
 $numer=$_SESSION['numer'];
 if ($result = $wynik->query("SELECT * FROM obeconsc WHERE data='$data' AND klasa='$klasa' AND numer_lekcji='$numer'")) {
   
    while($w=$result->fetch_assoc()){
	
		?>
 <br>
 <?php
 echo $w['data'];
 ?>
 <br>
 <?php
 echo $w['obecnosc'];
 ?>
 <br>
 <?php
 echo $w['uczen'];
 ?>
 <br>
 <?php
 echo $w['klasa'];
 ?>
 <br>
 <?php
 echo $w['dzienTygodnia'];
   
	
		/$wynik-> query("INSERT INTO `obeconsc` ( `data`, `obecnosc`, `numer_lekcji`, `uczen`, `klasa`, `dzienTygodnia`,) VALUES ( '$w['data']', '$w['obecnosc']', '$numer2', '$w['uczen']', '$w['klasa']', '$w['dzienTygodnia']')");
	
	
	
}



  
  
  //header ("Location:nau.php");
  

?>