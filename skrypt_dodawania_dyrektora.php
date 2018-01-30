
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
  
$nau=$_POST['nauc'];
$wynik->query("INSERT INTO dyrektorzy (`nauczyciel`) VALUES ('$nau')");

$wynik->close();
header('Location: panel_dodania_dyrektora.php');		
		
 ?>
 
 


</body>
</html>