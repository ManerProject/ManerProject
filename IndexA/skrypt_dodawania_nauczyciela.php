<?php 
require "baza.php";
session_start();
     
$h=$_POST['sele'];
$wynik->query("UPDATE loginy SET `typ` = 'teacher' WHERE login='$h'");
$wynik->query("UPDATE loginy SET `klasa` = NULL WHERE login='$h'");
	  
if ($result = $wynik->query("SELECT * FROM nau where nau='$id'"))
{	
	if($result->num_rows!=1 )
	{
	     $wynik->query("INSERT INTO `nau` ( `nau`,`przedmiot1`,`przedmiot2`,`przedmiot3`) VALUES ( '$id',0,0,0)");  
	}
	$result->close();
}
unset($_SESSION['login']);
header ('Location:admin.php');
?>