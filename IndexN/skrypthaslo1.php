<?php 
session_start();
require "baza.php";
 
$haslo=$_POST['haslo'];
$nhaslo=$_POST['nhaslo'];
$nau=$_SESSION['login'];

$wynik-> query("UPDATE `loginy` SET haslo='$nhaslo' WHERE haslo='$haslo' AND login='$nau'");
header ("Location:nau.php");
?>