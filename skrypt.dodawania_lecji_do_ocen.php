
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
 $wynik->query("INSERT INTO `lekcje` (`lekcja`) VALUES ('$kat')");
 

$wynik->close();
		 header ('Location:../IndexA/admin.php'); 
		
 ?>
 
 


</body>
</html>
