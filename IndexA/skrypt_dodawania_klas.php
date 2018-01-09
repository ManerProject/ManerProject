
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
$l=1;
echo $l.' '.$kat;
$wynik->query("INSERT INTO klasy (`id`, `numer`, `nazwa`) VALUES (NULL, '$l', '$kat')");

$wynik->close();
		
		
 ?>
 
 


</body>
</html>
