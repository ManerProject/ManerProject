<?php 
session_start();
require "baza.php";
 
$kto=$_POST['sele'];
$tytul=$_POST['tytul'];
$data=$_POST['data'];
$sala=$_POST['sala'];
$nau=$_SESSION['login'];

$wynik-> query("INSERT INTO `wywiadowka` ( `klasa`, `tytul`, `data`, `sala`) VALUES ( '$kto', '$tytul', '$data', '$sala')");
header ("Location:nau.php");
?>