<?php
session_start();
require "baza.php";
  
$wyd=$_POST['wyd'];
$data=$_POST['data'];

$wynik->query("INSERT INTO `wydarzenia` (`id`, `data`, `wydarzenie`, `klasa`) VALUES (NULL, '$data', '$wyd', '0')");
$wynik->query("UPDATE `wydarzenia_stale` SET data='$data' WHERE wydarzenie='$wyd'");
header('Location: panel_dodania_dat.php');
?>