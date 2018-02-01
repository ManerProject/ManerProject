<?php
session_start();


 require "baza.php";
  
$wydarzenie=$_POST['wydarzenie'];
$klasa=$_SESSION['klasa'];
$data=$_POST['data'];

$wynik->query("INSERT INTO `wydarzenia` (`id`, `data`, `wydarzenie`, `klasa``) VALUES (NULL, '$data', '$wydarzenie', '$klasa')");
header('Location: panel_dodawania_wydarzen.php');

?>