<?php 
session_start();
require "baza.php";
 
$kto=$_POST['sele'];
$tytuł=$_POST['tytul'];
$tresc=$_POST['tresc'];
$nau=$_SESSION['login'];
$rodzaj=$_POST['rodzaj'];
$data=$_POST['data'];
if ($result1 = $wynik->query("SELECT * FROM loginy WHERE login='$nau'")) 
{
    while($w=$result1->fetch_assoc())
	{
		$nau=$w['id'];
      
    }
}
if ($result12 = $wynik->query("SELECT * FROM loginy WHERE login='$kto'")) 
{
    while($w=$result12->fetch_assoc())
	{
		$kto=$w['id'];
    }
}
$wynik-> query("INSERT INTO `uwagi` ( `id_login`, `id_nau`, `tytul`, `tresc`, `rodzaj`, `data`) VALUES ( '$kto', '$nau', '$tytuł', '$tresc', '$rodzaj', '$data')");
header ("Location:panel_wyboru_lekcji_do_dodania_Ocen.php");
?>