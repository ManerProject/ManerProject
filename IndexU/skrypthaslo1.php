<?php 
session_start();
require "baza.php";
 
$haslo=$_POST['haslo'];
$nhaslo=$_POST['nhaslo'];
$log=$_SESSION['login'];

$wynik-> query("UPDATE `loginy` SET haslo='$nhaslo' WHERE haslo='$haslo' AND login='$log'");
 
header ("Location:haslo1.php");
?>