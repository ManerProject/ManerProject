
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
  
$kat=$_POST['logins'];
 echo $kat;
 $wynik->query("INSERT INTO `klasy` (`klasy`) VALUES ('$kat')");
 

$wynik->close();
		
		
 ?>
 
 


</body>
</html>
