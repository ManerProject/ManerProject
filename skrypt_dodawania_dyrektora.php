
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
$dyre=$_POST['dyrektor'];
if($dyre=="d")
{
	$poz=0;
}
else
{
	$poz=1;
}
$wynik->query("INSERT INTO dyrektorzy (`nauczyciel`, `pozycja`) VALUES ('$nau', '$poz')");

$wynik->close();
header('Location: panel_dodania_dyrektora.php');		
		
 ?>
 
 


</body>
</html>