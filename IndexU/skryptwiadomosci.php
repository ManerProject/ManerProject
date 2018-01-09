<?php 
session_start();
 ?>
<?php
 
require "baza.php";
 $kto=$_POST['sele'];
$tytul=$_POST['tytul'];
$tresc=$_POST['tresc'];
$nau=$_SESSION['login'];

 $wynik-> query("INSERT INTO `wiadomosci` ( `ID_nauczyciela`, `Autor`, `nazwa`, `tresc`) VALUES ( '$kto', '$nau', '$tytul', '$tresc')");
 
  
  header ("Location:index1.php");

?>