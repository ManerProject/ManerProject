<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>
<meta lang="pl"/>
<meta charset="utf-8"/>

</head>
<body>
 


   
 <?php
 require "baza.php";
  
$id=$_SESSION['id'];
$klasa=$_POST['klasa'];
$nr_lek=$_POST['nr_l'];
$data=$_POST['data'];
$opinia=$_POST['opinia'];
echo $data;

$wynik->query("INSERT INTO `wizyty_wicedyrektorow` (`id`, `klasa`, `lekcja`, `data`, `opis`, `wicedyrektor`) VALUES (NULL, '$klasa', '$nr_lek', '$data', '$opinia', '$id')");

header('Location: obserwacja.php');
		
 ?>
 
 


</body>
</html>