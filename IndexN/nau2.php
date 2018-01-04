
<!DOCTYPE html>

<html>
<?php 
session_start()
 ?>
<head>
<meta lang="pl"/>
<meta charset="utf-8"/>

</head>
<body>
 


   
 <?php
 $data= date('Y.m.d');

for($j=0;$j<strlen($data);$j++)
{
	if($data[$j]=='.')
		$data[$j]='-';
	
}
 require "baza.php";
 $kl= $_SESSION['kl'];
 echo $kl;
 $lek=$_SESSION['xdlekcja'];
 $zaco=$_POST['zaco'];
  ?>
	 <br>
	 
	 <?php 
  $id=0;
  $i=0;

  




 
  $nau= $_SESSION['login'];
   if ($result = $wynik->query("SELECT * FROM `loginy` WHERE klasa='$kl'")) {
   
    while($w=$result->fetch_assoc()){
     
	 
	 
	 

$gg = trim($_POST['hej'][$i]);

if(  $_POST['hej'][$i]<7  )
{
 
 	 
	 if( $_POST['hej'][$i]==0)
	 {
		 
		 echo $w['login'];
		 
	 }
	 else
	 {
		
		$ocena=$_POST['hej'][$i];
		$nick=$w['login'];
		
	 
		
	 $wynik->query("INSERT INTO `oceny` (`id`, `oceny`, `lekcja`, `nick`, `zaco`,`kl`,`Data`,`nauczyciel`) VALUES (NULL, '$ocena', '$lek', '$nick', '$zaco','$kl','$data','$nau')");
	 
 
	 }
   
}

   
   }}

   


 header ('Location:nau.php');
 //specjal dla szymka

$wynik->close();
		
		
 ?>
 
 


</body>
</html>
