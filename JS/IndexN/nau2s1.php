
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
		
	 
		
	 $wynik->query("INSERT INTO `ocenys2` (`id`, `oceny`, `lekcja`, `nick`, `zaco`,`kl`) VALUES (NULL, '$ocena', '$lek', '$nick', '$zaco','$kl')");
	 
 
	 }
   
}
else
{
  
  $_SESSION['blad1']="Bład w dodawaniu ocen podaj ocene z zakersu 1-6";
  header("location:nau.php");
}
	 
	  $i++;
	 
   }
   }
   
   

   


 header ('Location:naus1.php');
 

$wynik->close();
		
		
 ?>
 
 


</body>
</html>
